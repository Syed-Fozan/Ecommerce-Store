<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table="order";
  
    protected $fillable = ['product_id','user_id',"address","status","payment_method","payment_status"];

}
