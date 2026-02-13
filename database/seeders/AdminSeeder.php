<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $superAdmin = \App\Models\User::where('email', 'superadmin@sekolah.sch.id')->first();

    if (!$superAdmin) {
        \App\Models\User::create([
            'name'      => 'Super Admin',
            'email'     => 'superadmin@sekolah.sch.id',
            'password'  => bcrypt(value: 'kone123'), 
            'role'      => 'super_admin', 
        ]);
    }
}
}
