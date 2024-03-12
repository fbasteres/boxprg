<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Fernando',
            'lastname' => 'Ramirez Basteres',
            'username' => 'framirez',
            'docid' => '76006459',
            'password'=> 'admin',
        ]);
    }
}
