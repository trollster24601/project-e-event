<?php

namespace App\Models;

use CodeIgniter\Model;

class EoModel extends Model
{ 
    protected $table = "eos";
    protected $useAutoIncrement = false;
    protected $allowedFields = ["id", "user_id", "status", "contact"];
}