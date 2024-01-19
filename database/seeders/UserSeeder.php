<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data user
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'is_admin' => '1',                
                'password' => Hash::make('12345678'),
                
            ],
            [
                'name' => 'Admin',
                'email' => 'Admin2@gmail.com',
                'is_admin' => '1',                
                'password' => Hash::make('12345678'),
                
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Masukkan data ke dalam tabel users
        DB::table('users')->insert($users);
    }
}
