<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   

    public function add_breakfast_items()
    {
    	return view('admin.add_breakfast_items');
    }

}
