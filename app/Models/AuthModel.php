<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'login_session';
    protected $allowedFields = ['username', 'email', 'password', 'show_password'];
}
