<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakfast_menu extends Model
{
     protected $fillable = [
        'day_id', 'item_id'
    ];

    public function item()
	{
  	  return $this->belongsTo('App\breakfast_item', 'item_id');
	}
	 public function day()
	{
  	  return $this->belongsTo('App\day', 'day_id');
	}

}
