<?php

namespace App\Models;

use CodeIgniter\Model;

 class RegisterModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname','lastname','email','password','level','date_create'];
}