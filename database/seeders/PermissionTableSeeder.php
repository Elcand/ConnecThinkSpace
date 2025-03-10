<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name'  => 'user']);

        $permissions = [

            ['id' => 1,  'name' => 'users-view'],
            ['id' => 2,  'name' => 'users-create'],
            ['id' => 3,  'name' => 'users-edit'],
            ['id' => 4,  'name' => 'users-delete'],
            ['id' => 5,  'name' => 'users-show'],

            ['id' => 6,  'name' => 'roles-list'],
            ['id' => 7,  'name' => 'roles-create'],
            ['id' => 8,  'name' => 'roles-edit'],
            ['id' => 9,  'name' => 'roles-delete'],
            ['id' => 10, 'name' => 'roles-show'],

            ['id' => 11, 'name' => 'permission-view'],
            ['id' => 12, 'name' => 'permission-create'],
            ['id' => 13, 'name' => 'permission-edit'],
            ['id' => 14, 'name' => 'permission-delete'],
            ['id' => 15, 'name' => 'permission-show'],

            ['id' => 16, 'name' => 'setting-general'],
            ['id' => 17, 'name' => 'setting-smtp',],

            ['id' => 18, 'name' => 'config-view'],
            ['id' => 19, 'name' => 'config-create'],
            ['id' => 20, 'name' => 'config-edit'],
            ['id' => 21, 'name' => 'config-delete'],

        ];

            foreach ($permissions as $item) {
                Permission::create($item);
            }
            $admin->syncPermissions(Permission::all());
            $user->syncPermissions([]);
    }
}
