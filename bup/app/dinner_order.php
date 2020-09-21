<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dinner_order extends Model
{
   protected $fillable = [
        'date', 'user_id','status'
    ];

     public function user()
	{
  	  return $this->belongsTo('App\User', 'user_id');
	}
}
