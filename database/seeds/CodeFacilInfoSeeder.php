<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CodeFacilInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement("SET foreign_key_checks=0");
	    	DB::table('role_user')->truncate();
	    	DB::table('permission_role')->truncate();
	    	Permission::truncate();
	    	Role::truncate();
    	DB::statement("SET foreign_key_checks=1");

        $useradmin = User::where('email','admin@admin.com')->first();
        if($useradmin) {
        	$useradmin->delete();
        }
        $useradmin = User::create([
        	'name' 		=> 'admin',
        	'email' 	=> 'admin@admin.com',
        	'password' 	=> Hash::make('admin')
        ]);

        $roleadmin = Role::create([
	        'name' => 'Admin',
	        'slug' => 'admin',
	        'description' => 'Administrator',
	        'full-access' => 'yes'
	    ]);
        
        $useradmin->roles()->sync([$roleadmin->id]);

        $permission_all = [];

        //Permission Role

        $permission = Permission::create([
	        'name' => 'List role',
	        'slug' => 'role.index',
	        'description' => 'A user can list a role'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Show role',
	        'slug' => 'role.show',
	        'description' => 'A user can see a role'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Create role',
	        'slug' => 'role.create',
	        'description' => 'A user can create a role'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Edit role',
	        'slug' => 'role.edit',
	        'description' => 'A user can edit a role'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Destroy role',
	        'slug' => 'role.destroy',
	        'description' => 'A user can destroy a role'
	    ]);

	    $permission_all[] = $permission->id;

	    //Permission User

	    $permission = Permission::create([
	        'name' => 'List user',
	        'slug' => 'user.index',
	        'description' => 'A user can list a user'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Create user',
	        'slug' => 'user.create',
	        'description' => 'A user can create a user'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Show user',
	        'slug' => 'user.show',
	        'description' => 'A user can see a user'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Edit user',
	        'slug' => 'user.edit',
	        'description' => 'A user can edit a user'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Destroy user',
	        'slug' => 'user.destroy',
	        'description' => 'A user can destroy a user'
	    ]);

	    $permission_all[] = $permission->id;

	    //$roleadmin->permissions()->sync($permission_all);

	    $permission = Permission::create([
	        'name' => 'Show own user',
	        'slug' => 'userown.show',
	        'description' => 'A user can see own user'
	    ]);

	    $permission_all[] = $permission->id;

	    $permission = Permission::create([
	        'name' => 'Edit own user',
	        'slug' => 'userown.edit',
	        'description' => 'A user can edit own user'
	    ]);

    }
}
