<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $developer = Role::create([
            'name' => 'Developer',
            'is_default' => true
        ]);
        $adminsitrator = Role::create([
            'name' => 'Administrator',
            'is_default' => false
        ]);

        // Give permission to role
        $developer->givePermissionTo([
            'read-dashboards',
            'read-employees', 'create-employees', 'update-employees', 'delete-employees',
            'read-employee-types', 'create-employee-types', 'update-employee-types', 'delete-employee-types',
            'read-achievement-types', 'create-achievement-types', 'update-achievement-types', 'delete-achievement-types',
            'read-achievement-levels', 'create-achievement-levels', 'update-achievement-levels', 'delete-achievement-levels',
            'read-roles', 'create-roles', 'update-roles', 'delete-roles', 'change-permissions',
            'read-users', 'create-users', 'update-users', 'delete-users',
            'read-menus', 'create-menus', 'update-menus', 'delete-menus',
            'read-partners', 'create-partners', 'update-partners', 'delete-partners',
            'read-documents', 'create-documents', 'update-documents', 'delete-documents',
            'read-document-types', 'create-document-types', 'update-document-types', 'delete-document-types',
            'read-cooperation-types', 'create-cooperation-types', 'update-cooperation-types', 'delete-cooperation-types',
            'read-cooperation-fields', 'create-cooperation-fields', 'update-cooperation-fields', 'delete-cooperation-fields',
            'read-settings', 'update-settings',
        ]);
        $adminsitrator->givePermissionTo([
            'read-dashboards',
            'read-employees', 'create-employees', 'update-employees', 'delete-employees',
            'read-employee-types', 'create-employee-types', 'update-employee-types', 'delete-employee-types',
            'read-partners', 'create-partners', 'update-partners', 'delete-partners',
            'read-achievement-types', 'create-achievement-types', 'update-achievement-types', 'delete-achievement-types',
            'read-menus', 'create-menus', 'update-menus', 'delete-menus',
            'read-achievement-levels', 'create-achievement-levels', 'update-achievement-levels', 'delete-achievement-levels',
            'read-documents', 'create-documents', 'update-documents', 'delete-documents',
            'read-roles', 'create-roles', 'update-roles', 'delete-roles', 'change-permissions',
            'read-users', 'create-users', 'update-users', 'delete-users',
            'read-document-types', 'create-document-types', 'update-document-types', 'delete-document-types',
            'read-cooperation-types', 'create-cooperation-types', 'update-cooperation-types', 'delete-cooperation-types',
            'read-cooperation-fields', 'create-cooperation-fields', 'update-cooperation-fields', 'delete-cooperation-fields',
            'read-settings', 'update-settings',
        ]);
    }
}
