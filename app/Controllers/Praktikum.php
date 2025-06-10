<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Praktikum extends BaseController
{
    public function pretest()
    {
        return "Pretest Web Programming";
    }

    public function profil()
    {
        return view('profil');
    }

    public function tambahMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $builder->insert([
            'nim' => '32602300064',
            'nama' => 'Syiarotul Millah',
            'prodi' => 'Teknik Informatika'
        ]);

        return "Data ditambahkan.";
    }

    public function tampilMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get()->getResult();

        return view('tampil', ['mahasiswa' => $query]);
    }
}