<?php

namespace App\Models;

use CodeIgniter\Model;

class LogoModel extends Model
{
    protected $table = 'logo';
    protected $allowedFields = ['logo', 'logo_name'];

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['account_type' => $slug])->findAll();
    }

    // public function getLogo($logo) {
    //     $where = $this->logoModel->where('logo_name', 'Gmail');
    //     return $where->select('logo')->find();
    // }
}
