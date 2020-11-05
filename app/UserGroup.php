<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{

    protected $table = 'group_user';
    public $timestamps = false;
    protected $fillable = ['group_id', 'user_id'];

}
