<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Category;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_admin = new Role();
		$role_admin->name = 'Admin';
		$role_admin->save();
		
		$role_author = new Role();
		$role_author->name = 'Author';
		$role_author->save();
		
		$role_user = new Role();
		$role_user->name = 'User';
		$role_user->save();
    }
}
