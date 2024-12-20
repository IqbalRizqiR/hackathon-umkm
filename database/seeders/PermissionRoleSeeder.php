<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(
            [
                'name' => 'superadmin',
            ],
            [
                'name' => 'admin',
            ],
            [
                'name' => 'seller',
            ],
            [
                'name' => 'user',
            ],
        );
    }
}
