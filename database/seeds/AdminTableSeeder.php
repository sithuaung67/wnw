<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        	'name'=>'Admin',
        	'email'=>'wings&wheels@gmail.com',
        	'password'=>bcrypt('12345678'),
            'is_admin'=>true,

        ]);
    }
}
