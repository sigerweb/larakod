<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();

		//Membuat role member
		$memberRole = new  Role();
		$memberRole->name = "member";
		$memberRole->display_name = "Member";
		$memberRole->save();

		//Membuat sample admin
		$admin = new User();
		$admin->name = 'Administrator';
		$admin->email = 'admin@larakod.com';
		$admin->password = bcrypt('admin123');
		$admin->save();
		$admin->attachRole($adminRole);

		//Membuat sample user
		$member = new User();
		$member->name = "Member Larakod";
		$member->email = "member@larakod.com";
		$member->password = bcrypt('member123');
		$member->save();
		$member->attachRole($memberRole);

    }
}
