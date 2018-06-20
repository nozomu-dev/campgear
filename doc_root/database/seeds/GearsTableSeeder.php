<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Gear;

class GearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $gear = new Gear;
            $gear->gear_name = 'ギアネーム' . $i;
            $gear->gear_category_id = $i;
            $gear->owning_user_id = $i;
            $gear->repository_id = $i;
            $gear->gear_description = '説明文' . $i;
            $gear->save();
        }
    }
}
