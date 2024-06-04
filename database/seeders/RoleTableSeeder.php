<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'peternak']);

        $role->syncPermissions([
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
        ]);
    }
}
