<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
        [
            'npm' => '2017051084',
            'nama'    => 'Riski Sujianto',
            'alamat'    => 'Bandarlampung',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ],
        [
            'npm' => '2017051085',
            'nama'    => 'Ramadhan',
            'alamat'    => 'Palembang',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ],
        [
            'npm' => '2017051086',
            'nama'    => 'Riski Rama',
            'alamat'    => 'Jakarta',
            'created_at'    => Time::now(),
            // 'updated_at'    => ,
        ]
        ];

        // Simple Queries
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}