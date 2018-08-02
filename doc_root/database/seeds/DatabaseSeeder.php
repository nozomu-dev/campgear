<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            GearsTableSeeder::class,
            GearCategoriesTableSeeder::class,
            RepositoriesTableSeeder::class,
            UserGroupsTableSeeder::class
        ]);
    }
}
