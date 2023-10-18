<?php

namespace App\Controllers;

use App\Models\EoModel;
use App\Models\UserModel;

class UserController extends BaseController
{

    protected $userModel;

    protected $eoModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->eoModel = new EoModel();
    }

    public function register(): string
    {
        return view('User/register');
    }

    public function postRegister(){      
        $data = [
            'id' => uniqid(),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email'    => $this->request->getVar('email'),
            'name'     => $this->request->getVar('name'),
            'phone'    => $this->request->getVar('phone'),
            'address'  => $this->request->getVar('address'),
            'role'     => $this->request->getVar('role'),
            'contact' => $this->request->getVar('contact')
        ];
        if ($this->validationRegister()) {
            $this->userModel->save($data);
            if($this->request->getVar('role') == 'eo'){
                $this->eoModel->save([
                    'id' => uniqid(),
                    'user_id' => $data['id'],
                    'status' => 'waiting',
                    'contact' => $this->request->getVar('contact')
                ]);
            }
            return redirect()->to('users/login');
        } 
        return view('User/register', [
            'validation' => $this->validator,
            'data' => $data
        ]);
    }

    public function validationRegister(){
        $validationRules = [
            'username' => 'required|min_length[5]|max_length[100]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]',
            'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
            'name' => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
            'address' => 'required',
        ];  
        if($this->request->getVar('role') == 'eo'){
            $validationRules['contact'] = 'required'; 
        }
        return $this->validate($validationRules);
    }

    public function login(): string{
        return view('User/login');
    }
}