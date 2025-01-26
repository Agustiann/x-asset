<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruangan;
use Carbon\Carbon;

class CreateRuanganSeeder extends Seeder
{
    public function run()
    {
        Ruangan::create([
            'nama_ruangan' => 'Ruang 1',
            'status' => 'active',
            'createdBy' => 'admin',
            'createdDate' => Carbon::now(),
            'updatedBy' => 'admin',
            'updatedDate' => Carbon::now(),
        ]);

        Ruangan::create([
            'nama_ruangan' => 'Ruang 2',
            'status' => 'active',
            'createdBy' => 'admin',
            'createdDate' => Carbon::now(),
            'updatedBy' => 'admin',
            'updatedDate' => Carbon::now(),
        ]);

        Ruangan::create([
            'nama_ruangan' => 'Ruang 3',
            'status' => 'active',
            'createdBy' => 'admin',
            'createdDate' => Carbon::now(),
            'updatedBy' => 'admin',
            'updatedDate' => Carbon::now(),
        ]);

        Ruangan::create([
            'nama_ruangan' => 'Ruang 4',
            'status' => 'active',
            'createdBy' => 'admin',
            'createdDate' => Carbon::now(),
            'updatedBy' => 'admin',
            'updatedDate' => Carbon::now(),
        ]);
    }
}
