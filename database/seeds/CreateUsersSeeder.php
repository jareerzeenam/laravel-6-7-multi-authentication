<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'access_level'=>'Admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
                'access_level'=>'User',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Employee',
               'email'=>'employee@gmail.com',
                'access_level'=>'Employee',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
