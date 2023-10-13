<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webPermission = collect([
            # Dashboard related permission
            ['name' => 'read-dashboards', 'label' => 'Baca Dashboard'],
            # Roles related permission
            ['name' => 'read-roles', 'label' => 'Baca Role'],
            ['name' => 'create-roles', 'label' => 'Buat Role'],
            ['name' => 'update-roles', 'label' => 'Update Role'],
            ['name' => 'delete-roles', 'label' => 'Hapus Role'],
            ['name' => 'change-permissions', 'label' => 'Edit Hak Akses'],
            # Employee related permission
            ['name' => 'read-employees', 'label' => 'Baca Staff'],
            ['name' => 'create-employees', 'label' => 'Buat Staff'],
            ['name' => 'update-employees', 'label' => 'Update Staff'],
            ['name' => 'delete-employees', 'label' => 'Hapus Staff'],
            # Employee type related permission
            ['name' => 'read-employee-types', 'label' => 'Baca Jenis Staff'],
            ['name' => 'create-employee-types', 'label' => 'Buat Jenis Staff'],
            ['name' => 'update-employee-types', 'label' => 'Update Jenis Staff'],
            ['name' => 'delete-employee-types', 'label' => 'Hapus Jenis Staff'],
            # Achievement type related permission
            ['name' => 'read-achievement-types', 'label' => 'Baca Jenis Prestasi'],
            ['name' => 'create-achievement-types', 'label' => 'Buat Jenis Prestasi'],
            ['name' => 'update-achievement-types', 'label' => 'Update Jenis Prestasi'],
            ['name' => 'delete-achievement-types', 'label' => 'Hapus Jenis Prestasi'],
            # Achievement level related permission
            ['name' => 'read-achievement-levels', 'label' => 'Baca Tingkat Prestasi'],
            ['name' => 'create-achievement-levels', 'label' => 'Buat Tingkat Prestasi'],
            ['name' => 'update-achievement-levels', 'label' => 'Update Tingkat Prestasi'],
            ['name' => 'delete-achievement-levels', 'label' => 'Hapus Tingkat Prestasi'],
            # Document type related permission
            ['name' => 'read-document-types', 'label' => 'Baca Jenis Dokumen'],
            ['name' => 'create-document-types', 'label' => 'Buat Jenis Dokumen'],
            ['name' => 'update-document-types', 'label' => 'Update Jenis Dokumen'],
            ['name' => 'delete-document-types', 'label' => 'Hapus Jenis Dokumen'],
            # Cooperation field related permission
            ['name' => 'read-cooperation-fields', 'label' => 'Baca Bidang Kerjasama'],
            ['name' => 'create-cooperation-fields', 'label' => 'Buat Bidang Kerjasama'],
            ['name' => 'update-cooperation-fields', 'label' => 'Update Bidang Kerjasama'],
            ['name' => 'delete-cooperation-fields', 'label' => 'Hapus Bidang Kerjasama'],
            # Cooperation type related permission
            ['name' => 'read-cooperation-types', 'label' => 'Baca Jenis Kerjasama'],
            ['name' => 'create-cooperation-types', 'label' => 'Buat Jenis Kerjasama'],
            ['name' => 'update-cooperation-types', 'label' => 'Update Jenis Kerjasama'],
            ['name' => 'delete-cooperation-types', 'label' => 'Hapus Jenis Kerjasama'],

            # Users related permission
            ['name' => 'read-users', 'label' => 'Baca User'],
            ['name' => 'create-users', 'label' => 'Buat User'],
            ['name' => 'update-users', 'label' => 'Edit User'],
            ['name' => 'delete-users', 'label' => 'Hapus User'],
            # Document related permission
            ['name' => 'read-documents', 'label' => 'Baca Dokumen'],
            ['name' => 'create-documents', 'label' => 'Buat Dokumen'],
            ['name' => 'update-documents', 'label' => 'Edit Dokumen'],
            ['name' => 'delete-documents', 'label' => 'Hapus Dokumen'],
            # Menu related permission
            ['name' => 'read-menus', 'label' => 'Baca Menu'],
            ['name' => 'create-menus', 'label' => 'Buat Menu'],
            ['name' => 'update-menus', 'label' => 'Edit Menu'],
            ['name' => 'delete-menus', 'label' => 'Hapus Menu'],
            # Agency related permission
            ['name' => 'read-partners', 'label' => 'Baca Industri'],
            ['name' => 'create-partners', 'label' => 'Buat Industri'],
            ['name' => 'update-partners', 'label' => 'Edit Industri'],
            ['name' => 'delete-partners', 'label' => 'Hapus Industri'],
            # Settings related permissions
            ['name' => 'read-settings', 'label' => 'Akses Pengaturan'],
            ['name' => 'update-settings', 'label' => 'Perbarui Pengaturan'],


        ]);

        $this->insertPermission($webPermission);
    }

    private function insertPermission(Collection $permissions, $guardName = 'web')
    {
        Permission::insert($permissions->map(function ($permission) use ($guardName) {
            return [
                'name' => $permission['name'],
                'display_name' => $permission['label'],
                'guard_name' => $guardName,
                'created_at' => Carbon::now()
            ];
        })->toArray());
    }
}
