<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->count() == 0) {

            DB::table('users')->insert([[
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'role' => 'superadmin',
                'password' => bcrypt('admin'),
                'email_verified_at' => now()
            ], [
                'name' => 'Admin Gudang',
                'email' => 'warehouse_admin@gmail.com',
                'role' => 'warehouse',
                'password' => bcrypt('warehouse'),
                'email_verified_at' => now()
            ], [
                'name' => 'Admin Kurir',
                'role' => 'courier',
                'email' => 'courier_admin@gmail.com',
                'password' => bcrypt('courier'),
                'email_verified_at' => now()
            ], [
                'name' => 'Miko',
                'role' => 'user',
                'email' => 'miko@gmail.com',
                'password' => bcrypt('miko'),
                'email_verified_at' => now()
            ]]);
        }
    }
}
