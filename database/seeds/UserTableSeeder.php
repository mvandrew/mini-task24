<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the users table seeds.
     *
     * @return void
     */
    public function run()
    {
	    User::create([
	    	'name' => 'admin',
		    'email' => 'admin@admin.ru',
		    'password' => Hash::make('secret')
	    ]);
    }

}
