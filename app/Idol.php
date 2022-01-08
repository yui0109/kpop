<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idol extends Model
{
    protected $fillable = ['name','group_type','music_type'];
}
