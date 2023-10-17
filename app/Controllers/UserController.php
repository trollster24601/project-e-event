<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{

    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register(): string
    {
        return view("User/register");
    }

    public function postRegister(){
        $validationRules = [
            'username' => 'required|min_length[5]|max_length[100]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]',
            'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
            'name' => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
            'address' => 'required',
            'role' => 'required',
        ];        
        $data = [
            'id' => uniqid(),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email'    => $this->request->getVar('email'),
            'name'     => $this->request->getVar('name'),
            'phone'    => $this->request->getVar('phone'),
            'address'  => $this->request->getVar('address'),
            'role'     => $this->request->getVar('role')
        ];
        if ($this->validate($validationRules)) {
            $this->userModel->save($data);
        } else {
            return view('User/register', [
                'validation' => $this->validator,
                'data' => $data
            ]);
        }
    }
}