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
            'lastname' => 'John',
            'firstname' => 'Doe',
            'gender' => 'Male',
            'email' => 'john@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'company' => 'abc pte ltd',
            'role' => 'super',
            'status' => 'active'            
            ]);
        User::create([
            'lastname' => 'Jane',
            'firstname' => 'Doe',
            'gender' => 'Female',
            'email' => 'jane@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'company' => 'abc pte ltd',
            'role' => 'admin',
            'status' => 'active'            
            ]);
        User::create([
            'lastname' => 'Susan',
            'firstname' => 'Doe',
            'gender' => 'Female',
            'email' => 'susan@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'company' => 'abc pte ltd',
            'role' => 'admin',
            'status' => 'active'            
            ]);
        User::create([
            'lastname' => 'Scarlet',
            'firstname' => 'Tan',
            'gender' => 'Female',
            'email' => 'scarlet@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'company' => 'abc pte ltd',
            'role' => 'user',
            'status' => 'active'            
            ]);
        User::create([
            'lastname' => 'James',
            'firstname' => 'Lim',
            'gender' => 'Male',
            'email' => 'James@abc.com',
            'password' => Hash::make('Password01'),
            'city' => 'Singapore',
            'country' => 'Singapore',
            'company' => 'abc pte ltd',
            'role' => 'user',
            'status' => 'active'            
            ]);        
    }

}
