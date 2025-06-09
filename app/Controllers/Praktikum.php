<?php 
namespace App\Controllers;

use App\Models\MahasiswaModel; // gunakan use agar rapi

class Praktikum extends BaseController 
{
    public function pretest() 
    {
        return "Pretest Web Programming _Agnan Toro";
    }

    public function profil() 
    {
    
        $model = new MahasiswaModel();

        // Cek apakah NIM sudah ada agar tidak dobel
        if (!$model->find('32602300069')) {
            $model->insert([
                'nim' => '32602300069',
                'nama' => 'Agnan Toro',
                'prodi' => 'Teknik Informatika'
            ]);
        }

        // Ambil semua data dari tabel
        $data['mahasiswa'] = $model->findAll();

        // Kirim data ke view
        return view('profil_mahasiswa', $data);
    }
}
