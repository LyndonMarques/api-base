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

        $user = Role::firstOrNew(['name' => 'user']);
        if (!$user->exists) {
            $user->fill(['display_name' => 'User'])->save();
        }

        $trade = Role::firstOrNew(['name' => 'trade']);
        if (!$trade->exists) {
            $trade->fill(['display_name' => 'Trade'])->save();
        }

        $financial = Role::firstOrNew(['name' => 'financial']);
        if (!$financial->exists) {
            $financial->fill(['display_name' => 'Financeiro'])->save();
        }

        $power = Role::firstOrNew(['name' => 'power']);
        if (!$power->exists) {
            $power->fill(['display_name' => 'Power Travel'])->save();
        }

        $sponsorship = Role::firstOrNew(['name' => 'sponsorship']);
        if (!$sponsorship->exists) {
            $sponsorship->fill(['display_name' => 'Patrocínio'])->save();
        }

        $conference = Role::firstOrNew(['name' => 'conference']);
        if (!$conference->exists) {
            $conference->fill(['display_name' => 'Convenção'])->save();
        }
    }
}
