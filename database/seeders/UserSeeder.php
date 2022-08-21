<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Super Admin', 
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('123456')
        ]);
        $role = Role::create(['name' => 'Admin']);
        $user->assignRole([$role->id]);
        $permissions = Permission::pluck('id')->all();
        $role->syncPermissions($permissions);

        $user = User::create([
        	'name' => 'Branch Admin', 
        	'email' => 'branch@admin.com',
        	'password' => bcrypt('123456')
        ]);
        $role = Role::create(['name' => 'Branch Manager']);
        $user->assignRole([$role->id]);
        $role->syncPermissions(array(5,9));
    }
}
