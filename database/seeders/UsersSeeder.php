<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate([
            'email' => 'hola@mundoweb.pe'
        ],[
            'name' => 'Admin Mundo Web',
            'email' => 'hola@mundoweb.pe',
            'password' => Hash::make('12345678'),
        ])->assignRole('Admin');

        User::updateOrCreate([
            'email' => 'admin@boostperu.com'
        ], [
            'name' => 'Admin Boost Peru',
            'email' => 'admin@boostperu.com',
            'password' => Hash::make('b0057P3ru#2024'),
        ])->assignRole('Admin');

        User::updateOrCreate([
            'email' => 'customer@mundoweb.pe'
        ],[
            'name' => 'Customer Mundo Web',
            'email' => 'customer@mundoweb.pe',
            'password' => Hash::make('12345678'),
        ])->assignRole('Customer');
    }
}