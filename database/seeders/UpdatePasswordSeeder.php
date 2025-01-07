<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\XcodeAdmin;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordSeeder extends Seeder
{
    public function run()
    {
        $admin = XcodeAdmin::where('id_admin', 1)->first();
        if ($admin) {
            $admin->password = Hash::make('admin123');
            $admin->save();
        }
    }
}
