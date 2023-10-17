<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $useAutoIncrement = false;
    protected $allowedFields = ["id", "username", "password", "email", "name", "phone", "address", "role"];
}