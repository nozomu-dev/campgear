<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $primaryKey = 'user_group_id';

    public function userGroups() {
        return $this->belongsToMany('users');
    }
}
