<?php

namespace App\Controllers;
use App\Models\LogoModel;

class Logo extends BaseController
{
    protected $logoModel;

    public function __construct()
    {
        $this->logoModel = new LogoModel();
    }

	public function save()
	{
        if (!$this->validate([
            'logo-name' => [    
                'rules' => 'required|is_unique[logo.logo]',
                'errors' => [
                    'required' => '{field} required',
                    'is_unique' => '{field} must be unique'
                ]
            ],
            'logo' => [
                'rules' => 'is_image[logo]',
                'errors' => [
                    'is_image' => 'This is not an image'
                ]
            ]

        ])) {
            return redirect()->to('/pages/logo')->withInput();
        }

		$fileGambar = $this->request->getFile('logo');
        // dd($fileGambar);
        //jila tidak ada gambar dikirim
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.png';
        } else {
            //Genetare nama random file gambar
            $namaGambar = $fileGambar->getRandomName();
            //letakkan di local folder img
            $fileGambar->move('img', $namaGambar);
        }

        $this->logoModel->save([
            'logo_name' => $this->request->getVar('logo-name'),
            'logo' => $namaGambar
        ]);

        session()->setFlashData('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');

        return redirect()->to('/pages/logo');
	}
}
