<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialModel extends Model
{
    protected $table = 'social_account';
    protected $allowedFields = ['account', 'username', 'email', 'password'];

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
