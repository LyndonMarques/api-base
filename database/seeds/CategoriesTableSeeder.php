<?php

use App\ServiceCategory;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_category = ServiceCategory::firstOrNew(['slug' => 'patrocinio']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Patrocínio',
              'slug' => 'patrocinio'
            ])->save();
        }

        $service_category = ServiceCategory::firstOrNew(['slug' => 'eventos']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Congressos/Eventos',
              'slug' => 'eventos'
            ])->save();
        }

        $service_category = ServiceCategory::firstOrNew(['slug' => 'treinamentos']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Treinamentos',
              'slug' => 'treinamentos'
            ])->save();
        }

        $service_category = ServiceCategory::firstOrNew(['slug' => 'simposios']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Simpósios',
              'slug' => 'simposios'
            ])->save();
        }

        $service_category = ServiceCategory::firstOrNew(['slug' => 'mini-meetings']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Mini Meetings',
              'slug' => 'mini-meetings'
            ])->save();
        }

        $service_category = ServiceCategory::firstOrNew(['slug' => 'visitas']);
        if (!$service_category->exists) {
            $service_category->fill([
              'name' => 'Visitas',
              'slug' => 'visitas'
            ])->save();
        }
    }
}
