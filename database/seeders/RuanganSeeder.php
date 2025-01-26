<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('xcode_ruangan')->insert([
            [
                'id' => 1,
                'nama_ruangan' => 'Ruang 1',
                'status' => 'active',
                'createdBy' => 'admin',
                'createdDate' => Carbon::now(),
                'updatedBy' => 'admin',
                'updatedDate' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'nama_ruangan' => 'Ruang 2',
                'status' => 'active',
                'createdBy' => 'admin',
                'createdDate' => Carbon::now(),
                'updatedBy' => 'admin',
                'updatedDate' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'nama_ruangan' => 'Ruang 3',
                'status' => 'active',
                'createdBy' => 'admin',
                'createdDate' => Carbon::now(),
                'updatedBy' => 'admin',
                'updatedDate' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'nama_ruangan' => 'Ruang 4',
                'status' => 'active',
                'createdBy' => 'admin',
                'createdDate' => Carbon::now(),
                'updatedBy' => 'admin',
                'updatedDate' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}