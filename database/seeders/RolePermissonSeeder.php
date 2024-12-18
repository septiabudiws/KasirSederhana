<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-kategori']);
        Permission::create(['name' => 'edit-kategori']);
        Permission::create(['name' => 'hapus-kategori']);
        Permission::create(['name' => 'tambah-warna']);
        Permission::create(['name' => 'edit-warna']);
        Permission::create(['name' => 'hapus-warna']);
        Permission::create(['name' => 'tambah-ukuran']);
        Permission::create(['name' => 'edit-ukuran']);
        Permission::create(['name' => 'hapus-ukuran']);
        Permission::create(['name' => 'tambah-pakaian']);
        Permission::create(['name' => 'edit-pakaian']);
        Permission::create(['name' => 'hapus-pakaian']);
        Permission::create(['name' => 'checkout']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'karyawan']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-kategori');
        $roleAdmin->givePermissionTo('edit-kategori');
        $roleAdmin->givePermissionTo('hapus-kategori');
        $roleAdmin->givePermissionTo('tambah-warna');
        $roleAdmin->givePermissionTo('edit-warna');
        $roleAdmin->givePermissionTo('hapus-warna');
        $roleAdmin->givePermissionTo('tambah-ukuran');
        $roleAdmin->givePermissionTo('edit-ukuran');
        $roleAdmin->givePermissionTo('hapus-ukuran');
        $roleAdmin->givePermissionTo('tambah-pakaian');
        $roleAdmin->givePermissionTo('edit-pakaian');
        $roleAdmin->givePermissionTo('hapus-pakaian');
        $roleAdmin->givePermissionTo('checkout');

        $roleKaryawan = Role::findByName('karyawan');
        $roleKaryawan->givePermissionTo('checkout');
    }
}
