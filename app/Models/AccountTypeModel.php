<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountTypeModel extends Model
{
    protected $table = 'account_type';
    protected $allowedFields = ['account_type', 'account', 'username', 'email', 'password'];

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['account_type' => $slug])->findAll();
    }
    
}