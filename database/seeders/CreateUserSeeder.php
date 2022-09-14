<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'admin',
               'email'=>'admin@gmail.com',
               'role'=> 0,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Student',
               'email'=>'student@gmail.com',
               'role'=> 1,
               'password'=> bcrypt('123456789'),
            ],
            [
               'name'=>'Teacher',
               'email'=>'teacher@gmail.com',
               'role'=> 2,
               'password'=> bcrypt('1234567890'),
            ],
            
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }

}