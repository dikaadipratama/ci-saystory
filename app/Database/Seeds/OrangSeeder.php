<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
    $data = [
      [
        'nama'         => 'dikaadi',
        'alamat'       => 'baki skh',
        'created_at'   => Time::now(),
        'updated_at'   => Time::now()
      ],
      [
        'nama'         => 'lutfira',
        'alamat'       => 'baki skh',
        'created_at'   => Time::now(),
        'updated_at'   => Time::now()
      ],
      [
        'nama'         => 'chintya',
        'alamat'       => 'Solo',
        'created_at'   => Time::now(),
        'updated_at'   => Time::now()
      ]
    ];

    // simple query
    // $this->db->query(
    //   "INSERT INTO Orang (nama,alamat,created_at,updated_at) VALUES (:nama:,:alamat:,:created_at:,:updated_at:)", $data
    // );

    // query builder
    // $this->db->table('orang')->insert($data);
    $this->db->table('orang')->insertBatch($data);
  }
}
