<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  users ==> role -> user
        User::factory()->count(10)->create();

        User::factory()->create([
      'name' =>'admin',
      'email'=>'admin@gmail.com',
      'password'=>Hash::make('12345678'),
      'role'=>'admin'
        ]);

    }
}
