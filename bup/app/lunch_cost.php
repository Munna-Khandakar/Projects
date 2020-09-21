<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lunch_cost extends Model
{
     protected $fillable = [
        'id', 'date', 'participant', 'total_cost', 'individual_cost'
    ];
}
