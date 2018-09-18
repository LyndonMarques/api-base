<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

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

        $role = Role::firstOrNew(['name' => 'power']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Power Travel'])->save();
        }

        $role = Role::firstOrNew(['name' => 'sponsorship']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Patrocínio'])->save();
        }

        $role = Role::firstOrNew(['name' => 'conference']);
        if (!$role->exists) {
            $role->fill(['display_name' => 'Convenção'])->save();
        }
    }
}
