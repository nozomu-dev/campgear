<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserGroup;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $user_group = new UserGroup;
            $user_group->user_group_name = 'ユーザーグループ' . $i;
            $user_group->save();
        }
    }
}
