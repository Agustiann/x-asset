<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\XcodeAdmin;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    public function run()
    {
        XcodeAdmin::create([
            'nama' => 'admin',
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
