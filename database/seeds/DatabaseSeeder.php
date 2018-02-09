<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Hash;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'gender' => 'Male',
            'email' => 'john@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'role' => 'super',
            'status' => 'active'            
            ]);
        User::create([
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'gender' => 'Female',
            'email' => 'jane@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'role' => 'admin',
            'status' => 'active'            
            ]);
        User::create([
            'firstname' => 'Susan',
            'lastname' => 'Doe',
            'gender' => 'Female',
            'email' => 'susan@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'role' => 'admin',
            'status' => 'active'            
            ]);
        User::create([
            'firstname' => 'Scarlet',
            'lastname' => 'Tan',
            'gender' => 'Female',
            'email' => 'scarlet@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'role' => 'user',
            'status' => 'active'            
            ]);
        User::create([
            'firstname' => 'James',
            'lastname' => 'Lim',
            'gender' => 'Male',
            'email' => 'James@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'role' => 'user',
            'status' => 'active'            
            ]);        
    }

}
