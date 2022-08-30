<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
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
    }
}
