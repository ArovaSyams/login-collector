<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'account';
    protected $allowedFields = ['session', 'account_type', 'account', 'username', 'email', 'password'];

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['account_type' => $slug])->findAll();
    }
    
}
