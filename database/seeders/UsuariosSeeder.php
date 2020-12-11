<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Pablo Admin',
            'email' => 'jpAdmin@gmail.com',
            'email_verified_at' => now(),
            'dni' => '12345678P',
            'direccion' => 'c/ San Bartolomé',
            'telefono' => '987654321',
            'role' => 'admin',
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Juan Pablo User',
            'email' => 'jpUser@gmail.com',
            'email_verified_at' => now(),
            'dni' => '12345678P',
            'direccion' => 'c/ San Bartolomé',
            'telefono' => '987654321',
            'role' => 'user',
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Jaime Barrios Admin',
            'email' => 'jbrAdmin@gmail.com',
            'email_verified_at' => now(),
            'dni' => '87654321E',
            'direccion' => 'c/ San Isidro',
            'telefono' => '123456789',
            'role' => 'admin',
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Jaime Barrios User',
            'email' => 'jbrUser@gmail.com',
            'email_verified_at' => now(),
            'dni' => '87654321E',
            'direccion' => 'c/ San Isidro',
            'telefono' => '123456789',
            'role' => 'user',
            'password' => Hash::make('1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
