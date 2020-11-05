<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Archive extends Model
{
    protected $fillable = [
    	'title', 'year', 'author','adviser','file_name'
    ];
}
