<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
        	['id' => 1, 'name' => 'manager'],
        	['id' => 2, 'name' => 'developer'],
    	];
    	App\Models\Role::insert($roles);
    }
}
