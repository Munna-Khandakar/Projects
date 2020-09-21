<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakfast_order extends Model
{
   protected $fillable = [
        'date', 'user_id','status'
    ];

     public function user()
	{
  	  return $this->belongsTo('App\User', 'user_id');
	}

	  public function cost()
	{
  	  return $this->belongsTo('App\breakfast_cost','date');
	}
}
