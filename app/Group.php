<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Group extends Model
{
	protected $fillable = [
		'group_name' , 'group_title', 'group_course', 'acces_code'
	];
}
