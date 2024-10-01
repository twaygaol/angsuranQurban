<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CustomerRoleSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah permission 'view_installments' sudah ada, jika belum buat permission
        if (!Permission::where('name', 'view_installments')->exists()) {
            Permission::create(['name' => 'view_installments']);
        }

        // Periksa apakah role customer sudah ada
        $customerRole = Role::where('name', 'customer')->first();

        // Jika belum ada, buat role baru
        if (!$customerRole) {
            $customerRole = Role::create(['name' => 'customer']);
        }

        // Memberikan permission kepada customer
        $customerRole->givePermissionTo('view_installments');
    }
}
