<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    public $table = "trendings";
   protected $fillable = ['name','img'];
}
