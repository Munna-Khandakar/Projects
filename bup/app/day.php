<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day extends Model
{
     protected $fillable = [
        'day',
    ];

    public function breakfast_menu()
    {
        return $this->hasOne('App\breakfast_menu', 'day_id');
    }
}
