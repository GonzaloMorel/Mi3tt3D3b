<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \miette\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'rut' => '15471691',
                'dv' => '2',
                'name' => 'Administrador',
                'email' => 'gonmore.mm@gmail.com',
                'password' => bcrypt('123456'),
                'activate' => true
            ]
        );

    }
}
