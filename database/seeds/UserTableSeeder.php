<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $role_admin = Role::where('name', 'admin')->first();
		$role_author  = Role::where('name', 'author')->first();
		$role_user  = Role::where('name', 'user')->first();
		
		/**********Add admin test data***/
		$admin = new User();
		$admin->name = 'Shalini Tripathi';
		$admin->email = 'shalini@test.com';
		$admin->password = bcrypt('123456');
		$admin->save();
		$admin->roles()->attach($role_admin);
		/**********Add author test data***/
		$author = new User();
		$author->name = 'Abc Author';
		$author->email = 'abc@test.com';
		$author->password = bcrypt('123456');
		$author->save();
		$author->roles()->attach($role_author);
		/**********Add admin user data***/
		$user = new User();
		$user->name = 'Test User';
		$user->email = 'shalu@test.com';
		$user->password = bcrypt('123456');
		$user->save();
		$user->roles()->attach($role_user);
    }
}
