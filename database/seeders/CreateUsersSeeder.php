<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
               'name'=>'Elielson(Admin)',
               'email'=>'mail.com',
               'type'=>1,
               'password'=> bcrypt('pass'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
