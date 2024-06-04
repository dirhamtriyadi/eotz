<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create user',
            'read user',
            'update user',
            'delete user',
            // 'create role',
            // 'read role',
            // 'update role',
            // 'delete role',
            // 'create permission',
            // 'read permission',
            // 'update permission',
            // 'delete permission',
            'create ternak',
            'read ternak',
            'update ternak',
            'delete ternak',
            'print ternak',
            'create artikel',
            'read artikel',
            'update artikel',
            'delete artikel',
            'create kandang'
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
