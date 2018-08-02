<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Repository;

class RepositoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $repository = new Repository;
            $repository->repository_name = '保管場所' . $i;
            $repository->repository_address = '兵庫県尼崎市水堂町3重目17-27 デイグラン武庫之荘308号' . $i;
            $repository->save();
        }
    }
}
