<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\PermissionRole;
use App\Models\RoleUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = [
            [
                'name' => 'manager-post'
            ],
            [
                'name' => 'read-post'
            ],
            [
                'name' => 'manager-role-permission'
            ],
            [
                'name' => 'read-role-permission'
            ],
            [
                'name' => 'manager-user'
            ],
            [
                'name' => 'read-user'
            ],
            [
                'name' => 'supper-admin'
            ],
            [
                'name' => 'user'
            ],
            [
                'name' => 'admin'
            ],
        ];
        Permission::insert($data);     
        
        $role = new Role;
        $role->name = 'supper-admin';
        $role ->save();
        PermissionRole::insert([
            [
                'permission_id' => 7,
                'role_id' => 1 
            ],
            [
                'permission_id' =>9,
                'role_id' => 1 
            ]
        ]);

        User::insert([
            'name' => 'Admin Supper',
            'email' => 'admin@supper.com',
            'password' => Hash::make('123123')
        ]);

        RoleUser::insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

    }
}
