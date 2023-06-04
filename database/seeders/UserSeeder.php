<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Smabosa',
            'email' => 'adminsmabosa@gmail.com', 
            'password'  => bcrypt('12345678'), 
            'username' => 'candra',
            'role_name' => 'Admin',
            'role_id'   => 1, 
            'photo_profile' => null,
            'status'   => '1',
        ]);
    }
}
