<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'class-list',
            'class-create',
            'class-edit',
            'class-delete',
            'course-list',
            'course-create',
            'course-edit',
            'course-delete'
        ];

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
