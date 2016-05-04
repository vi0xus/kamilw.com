<?php

use App\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'tr3nx',
    		'email' => 'me@tr3nx.net',
    		'password' => 'pass'
    	]);
    }
}
