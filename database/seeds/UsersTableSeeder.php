<?php

use Illuminate\Database\Seeder;
use App\User;
use TCG\Voyager\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (User::count() == 0) {
          $admin_role = Role::where('name', 'admin')->firstOrFail();

          $user = User::create([
              'name'           => 'Admin',
              'email'          => 'admin@admin.com',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $admin_role->id
          ]);

          $power_role = Role::where('name', 'power')->firstOrFail();

          $user = User::create([
              'name'           => 'Power Travel',
              'email'          => 'contato@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $power_role->id
          ]);
      }
    }
}
