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
          $user_role        = Role::where('name', 'user')->firstOrFail();
          $admin_role       = Role::where('name', 'admin')->firstOrFail();
          $power_role       = Role::where('name', 'power')->firstOrFail();
          $trade_role       = Role::where('name', 'trade')->firstOrFail();
          $financial_role   = Role::where('name', 'financial')->firstOrFail();
          $sponsorship_role = Role::where('name', 'sponsorship')->firstOrFail();
          $conference_role  = Role::where('name', 'conference')->firstOrFail();

          $admin = User::firstOrCreate([
              'name'           => 'Admin',
              'email'          => 'admin@admin.com',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $admin_role->id
          ]);
          $admin->roles()->sync($admin_role->id);

          $power = User::firstOrCreate([
              'name'           => 'Power Travel',
              'email'          => 'contato@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $user_role->id
          ]);
          $power->roles()->sync([$power_role->id, $sponsorship_role->id, $conference_role->id]);

          $trade = User::firstOrCreate([
              'name'           => 'Zodiac',
              'email'          => 'trade@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $user_role->id
          ]);
          $trade->roles()->sync([$trade_role->id, $sponsorship_role->id, $conference_role->id]);

          $financial = User::firstOrCreate([
              'name'           => 'Financeiro',
              'email'          => 'financeiro@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $user_role->id
          ]);
          $financial->roles()->sync($financial_role);

          $sponsorship = User::firstOrCreate([
              'name'           => 'Patrocinio',
              'email'          => 'patrocinio@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $user_role->id
          ]);
          $sponsorship->roles()->sync([$trade_role->id, $sponsorship_role->id]);

          $conference = User::firstOrCreate([
              'name'           => 'Eventos',
              'email'          => 'eventos@powertravel.com.br',
              'password'       => bcrypt('password'),
              'remember_token' => str_random(60),
              'role_id'        => $user_role->id
          ]);
          $conference->roles()->sync([$trade_role->id, $conference_role->id]);
      }
    }
}
