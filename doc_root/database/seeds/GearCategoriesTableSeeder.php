<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\GearCategory;

class GearCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $gear_category = new GearCategory;
            $gear_category->gear_category_name = 'カテゴリー' . $i;
            $gear_category->save();
        }
    }
}
