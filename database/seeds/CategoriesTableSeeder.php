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
    }
}
