<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Admin'])->save();
        }

        $role = Role::firstOrNew(['name' => 'trade']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Comercial'])->save();
        }

        $role = Role::firstOrNew(['name' => 'financial']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Financeiro'])->save();
        }
    }
}
