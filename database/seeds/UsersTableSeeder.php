<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
          $role = Role::where('name', 'admin')->firstOrFail();

          $user = User::create([
              'name'           => 'Admin',
              'email'          => 'admin@admin.com',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60)
          ]);

          $user->roles()->attach($role);
      }
    }
}
