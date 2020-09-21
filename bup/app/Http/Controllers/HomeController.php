<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Exports\UsersExportLastMonth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use App\breakfast_item;
use App\breakfast_menu;
use App\breakfast_order;
use App\breakfast_cost;

use App\lunch_item;
use App\lunch_menu;
use App\lunch_order;
use App\lunch_cost;

use App\dinner_item;
use App\dinner_menu;
use App\dinner_order;
use App\dinner_cost;
use App\monthly_cost;



use App\User;
use App\day;
use Carbon\Carbon;
use DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today_date = date('Y-m-d');

        $d = new DateTime('+1day');
        $tomorrow_date = $d->format('Y-m-d');
        $specificDate = strtotime($tomorrow_date);
        $tomorrow_day = date('l', $specificDate);
        $tomorrow_day_id=DB::table('days')
        ->where('day', $tomorrow_day)
        ->first();
        $tomorrow_id= $tomorrow_day_id->id;
        $tomorrow_breakfast=breakfast_menu::where('day_id', '=', $tomorrow_id)->get();
        $tomorrow_lunch=lunch_menu::where('day_id', '=', $tomorrow_id)->get();
        $tomorrow_dinner=dinner_menu::where('day_id', '=', $tomorrow_id)->get();

        $today_day = Carbon::now()->format( 'l' );
        $today_day_id=DB::table('days')
        ->where('day', $today_day)
        ->first();
        $today_id= $today_day_id->id;
        
        $today_breakfast=breakfast_menu::where('day_id', '=', $today_id)->get();
        $today_lunch=lunch_menu::where('day_id', '=', $today_id)->get();
        $today_dinner=dinner_menu::where('day_id', '=', $today_id)->get();

        
        $id=Auth::user()->id;
        $today_breakfast_status=0;
        $breakfast_data=DB::table('breakfast_orders')
        ->where('user_id',$id)
        ->where('date',$today_date)
        ->first();
        if ($breakfast_data) {
            $today_breakfast_status=1;
        }
        $today_lunch_status=0;
        $lunch_data=DB::table('lunch_orders')
        ->where('user_id',$id)
        ->where('date',$today_date)
        ->first();
        if ($lunch_data) {
            $today_lunch_status=1;
        }
        $today_dinner_status=0;
        $dinner_data=DB::table('dinner_orders')
        ->where('user_id',$id)
        ->where('date',$today_date)
        ->first();
        if ($dinner_data) {
            $today_dinner_status=1;
        }
        //return $breakfast_status;
        $tomorrow_breakfast_status=0;
        $breakfast_data=DB::table('breakfast_orders')
        ->where('user_id',$id)
        ->where('date',$tomorrow_date)
        ->first();
        if ($breakfast_data) {
            $tomorrow_breakfast_status=1;
        }
        $tomorrow_lunch_status=0;
        $lunch_data=DB::table('lunch_orders')
        ->where('user_id',$id)
        ->where('date',$tomorrow_date)
        ->first();
        if ($lunch_data) {
            $tomorrow_lunch_status=1;
        }
        $tomorrow_dinner_status=0;
        $dinner_data=DB::table('dinner_orders')
        ->where('user_id',$id)
        ->where('date',$tomorrow_date)
        ->first();
        if ($dinner_data) {
            $tomorrow_dinner_status=1;
        }
        $month = date('m');
        $breakfast_cost=DB::table('breakfast_orders')
        ->join('breakfast_costs','breakfast_orders.date','=','breakfast_costs.date')
        ->where('breakfast_orders.user_id',$id)
        ->whereMonth('breakfast_orders.created_at',$month)
        ->sum('breakfast_costs.individual_cost');
        $lunch_cost=DB::table('lunch_orders')
        ->join('lunch_costs','lunch_orders.date','=','lunch_costs.date')
        ->where('lunch_orders.user_id',$id)
        ->whereMonth('lunch_orders.created_at',$month)
        ->sum('lunch_costs.individual_cost');
        $dinner_cost=DB::table('dinner_orders')
        ->join('dinner_costs','dinner_orders.date','=','dinner_costs.date')
        ->where('dinner_orders.user_id',$id)
        ->whereMonth('dinner_orders.created_at',$month)
        ->sum('dinner_costs.individual_cost');
        $total_cost=($breakfast_cost+$lunch_cost+$dinner_cost);


        return view('home',compact('today_breakfast','today_lunch','today_dinner','tomorrow_breakfast','tomorrow_lunch','tomorrow_dinner','today_date','today_day','tomorrow_date','tomorrow_day','today_breakfast_status','today_lunch_status','today_dinner_status','tomorrow_breakfast_status','tomorrow_lunch_status','tomorrow_dinner_status','breakfast_cost','lunch_cost','dinner_cost','total_cost'));
    }

    public function adminHome()
    {
       $day = Carbon::now()->format( 'l' );
       $day_id=DB::table('days')
       ->where('day', $day)
       ->first();
       $id= $day_id->id; 
       $today = date('Y-m-d');
       $showToday = date('d/m/Y');



       $b1= DB::table('breakfast_menus')
       ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
       ->where('breakfast_menus.day_id',$id)
       ->select('breakfast_items.item')
       ->get();  
       $l1= DB::table('lunch_menus')
       ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
       ->where('lunch_menus.day_id',$id)
       ->select('lunch_items.item')
       ->get(); 
       $d1= DB::table('dinner_menus')
       ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
       ->where('dinner_menus.day_id',$id)
       ->select('dinner_items.item')
       ->get();

       $breakfast_participants=breakfast_order::where('date',$today)->get()->count();
       $lunch_participants=lunch_order::where('date',$today)->get()->count();
       $dinner_participants=dinner_order::where('date',$today)->get()->count();
       return view('admin.home',compact('b1','l1','d1','breakfast_participants','lunch_participants','dinner_participants','day','showToday'));
   }
   public function add_food_items()
   {
    $breakfast= DB:: table('breakfast_items') ->get();
    $lunch= DB:: table('lunch_items') ->get();
    $dinner= DB:: table('dinner_items') ->get();
    return view('admin.add_food_items',compact('breakfast','lunch','dinner'));
}

public function add_breakfast_items(Request $request)
{
    $validatedData = $request->validate([
        'item' => 'required|unique:breakfast_items',
    ]);

    $data=array();
    $data['item']= $request -> item;
    $category=DB::table('breakfast_items') -> insert($data);
    return Redirect() -> route('add_food_items');
}
public function add_lunch_items(Request $request)
{
    $validatedData = $request->validate([
        'item' => 'required|unique:lunch_items',
    ]);

    $data=array();
    $data['item']= $request -> item;
    $category=DB::table('lunch_items') -> insert($data);
    return Redirect() -> route('add_food_items');
}
public function add_dinner_items(Request $request)
{
    $validatedData = $request->validate([
        'item' => 'required|unique:dinner_items',
    ]);

    $data=array();
    $data['item']= $request -> item;
    $category=DB::table('dinner_items') -> insert($data);
    return Redirect() -> route('add_food_items');
}


public function add_menu()
{
    $breakfast= DB:: table('breakfast_items') ->get();
    $lunch= DB:: table('lunch_items') ->get();
    $dinner= DB:: table('dinner_items') ->get();
    $day= DB:: table('days') ->get();
    return view('admin.add_menu',compact('breakfast','lunch','dinner','day'));
}

public function insert_menu(Request $request)
{

    $day= $request->day_id;

    breakfast_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuBreakfast);$i++)
    {
        $breakfast= new  breakfast_menu;
        $breakfast->day_id=$day;
        $breakfast->item_id=$request->menuBreakfast[$i];
        $breakfast->save();
    }
    lunch_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuLunch);$i++)
    {
        $lunch= new  lunch_menu;
        $lunch->day_id=$day;
        $lunch->item_id=$request->menuLunch[$i];
        $lunch->save();
    }
    dinner_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuDinner);$i++)
    {
        $dinner= new  dinner_menu;
        $dinner->day_id=$day;
        $dinner->item_id=$request->menuDinner[$i];
        $dinner->save();
    }
    return Redirect() -> route('admin.home');

    
}


public function show_menu()
{
   $b1= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',1)
   ->select('breakfast_items.item')
   ->get();  
   $l1= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',1)
   ->select('lunch_items.item')
   ->get(); 
   $d1= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',1)
   ->select('dinner_items.item')
   ->get();
   $b2= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',2)
   ->select('breakfast_items.item')
   ->get();  
   $l2= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',2)
   ->select('lunch_items.item')
   ->get(); 
   $d2= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',2)
   ->select('dinner_items.item')
   ->get(); 
   $b3= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',3)
   ->select('breakfast_items.item')
   ->get();  
   $l3= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',3)
   ->select('lunch_items.item')
   ->get(); 
   $d3= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',3)
   ->select('dinner_items.item')
   ->get();
   $b4= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',4)
   ->select('breakfast_items.item')
   ->get();  
   $l4= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',4)
   ->select('lunch_items.item')
   ->get(); 
   $d4= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',4)
   ->select('dinner_items.item')
   ->get();

   $b5= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',5)
   ->select('breakfast_items.item')
   ->get();  
   $l5= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',5)
   ->select('lunch_items.item')
   ->get(); 

   $d5= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',5)
   ->select('dinner_items.item')
   ->get();

   $b6= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',6)
   ->select('breakfast_items.item')
   ->get();   

   $l6= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',6)
   ->select('lunch_items.item')
   ->get(); 

   $d6= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',6)
   ->select('dinner_items.item')
   ->get();


   $b7= DB::table('breakfast_menus')
   ->leftJoin('breakfast_items', 'breakfast_menus.item_id', '=', 'breakfast_items.id')
   ->where('breakfast_menus.day_id',7)
   ->select('breakfast_items.item')
   ->get();  

   $l7= DB::table('lunch_menus')
   ->leftJoin('lunch_items', 'lunch_menus.item_id', '=', 'lunch_items.id')
   ->where('lunch_menus.day_id',7)
   ->select('lunch_items.item')
   ->get(); 

   $d7= DB::table('dinner_menus')
   ->leftJoin('dinner_items', 'dinner_menus.item_id', '=', 'dinner_items.id')
   ->where('dinner_menus.day_id',7)
   ->select('dinner_items.item')
   ->get();

   return view('admin.show_menu',compact('b1','l1','d1','b2','l2','d2','b3','l3','d3','b4','l4','d4','b5','l5','d5','b6','l6','d6','b7','l7','d7'));


}


public function edit_menu($id)
{
    $day_id=$id;

    $breakfast=breakfast_item::get();
    $breakfast_selected=breakfast_menu::where('day_id', '=', $id)->get();

    $lunch=lunch_item::get();
    $lunch_selected=lunch_menu::where('day_id', '=', $id)->get();

    $dinner=dinner_item::get();
    $dinner_selected=dinner_menu::where('day_id', '=', $id)->get();

    return view('admin.update_menu',compact('breakfast','breakfast_selected','lunch','lunch_selected','dinner','dinner_selected','day_id'));
}

public function update_breakfast_menu(Request $request,$id)
{

    $day= $id;

    breakfast_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuBreakfast);$i++)
    {
        $breakfast= new  breakfast_menu;
        $breakfast->day_id=$day;
        $breakfast->item_id=$request->menuBreakfast[$i];
        $breakfast->save();
    }
    return Redirect() -> route('show_menu');
}
public function update_lunch_menu(Request $request,$id)
{
    $day= $id;

    lunch_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuLunch);$i++)
    {
        $lunch= new  lunch_menu;
        $lunch->day_id=$day;
        $lunch->item_id=$request->menuLunch[$i];
        $lunch->save();
    }
    return Redirect() -> route('show_menu');
}
public function update_dinner_menu(Request $request,$id)
{
    $day= $id;

    dinner_menu::where('day_id', $day)->delete();
    for($i=0;$i<count($request->menuDinner);$i++)
    {
        $dinner= new  dinner_menu;
        $dinner->day_id=$day;
        $dinner->item_id=$request->menuDinner[$i];
        $dinner->save();
    }
    return Redirect() -> route('show_menu');
}


public function show_users()
{

    $data=User::get();
    return view('admin.show_users',compact('data'));
}

public function edit_users($id)
{
    $user=User::where('id', '=', $id)->first();
    return view('admin.edit_users',compact('user'));
}
public function update_users(Request $request)
{

    $user = User::find($request->id);
    $user->is_admin=$request->is_admin;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->roll=$request->roll;
    $user->dept=$request->dept;
    $user->batch=$request->batch;
    $user->phone=$request->phone;
    $user->save();
    return Redirect() -> route('show_users');

    
}



public function check()
{
    $status=0;
    $id=Auth::user()->id;
    $date = date('d-m-Y');
    $data=DB::table('breakfast_orders')
    ->where('user_id',$id)
    ->where('date',$date)
    ->first();
    if ($data) {
        $status=1;
    }




//return view('admin.check',compact('record'));
}  

public function search_breakfast(Request $request)
{

    $specificDate = strtotime($request->selected_date);
    $day = date('l', $specificDate);
    $day_id=DB::table('days')
    ->where('day', $day)
    ->first();
    $id= $day_id->id;
    $breakfast=breakfast_menu::where('day_id', '=', $id)->get();
    
    foreach ($breakfast as $key => $row) {
       echo '<li>'.$row->item->item.'</li>';
   }
} 
public function search_lunch(Request $request)
{

    $specificDate = strtotime($request->selected_date);
    $day = date('l', $specificDate);
    $day_id=DB::table('days')
    ->where('day', $day)
    ->first();
    $id= $day_id->id;
    $lunch=lunch_menu::where('day_id', '=', $id)->get();
    
    foreach ($lunch as $key => $row) {
       echo '<li>'.$row->item->item.'</li>';
   }
} 

public function search_dinner(Request $request)
{

    $specificDate = strtotime($request->selected_date);
    $day = date('l', $specificDate);
    $day_id=DB::table('days')
    ->where('day', $day)
    ->first();
    $id= $day_id->id;
    $dinner=dinner_menu::where('day_id', '=', $id)->get();
    
    foreach ($dinner as $key => $row) {
       echo '<li>'.$row->item->item.'</li>';
   }
}

public function changeBreakfastStatus(Request $request)
{
    $user_id=Auth::user()->id;
    $today = date('Y-m-d');
    $breakfast_data=DB::table('breakfast_orders')
    ->where('user_id',$user_id)
    ->where('date',$today)
    ->first();
    if ($breakfast_data) {

        $delete=DB::table('breakfast_orders')
        ->where('user_id',$user_id)
        ->where('date',$today)
        ->delete();
    }
    else
    {
        $breakfast_order= new  breakfast_order;
        $breakfast_order->date=$today;
        $breakfast_order->user_id=$user_id;
        $breakfast_order->status=1;
        $breakfast_order->save();
    }
} 

public function changeLunchStatus(Request $request)
{
    $user_id=Auth::user()->id;
    $today = date('Y-m-d');
    $lunch_data=DB::table('lunch_orders')
    ->where('user_id',$user_id)
    ->where('date',$today)
    ->first();
    if ($lunch_data) {

        $delete=DB::table('lunch_orders')
        ->where('user_id',$user_id)
        ->where('date',$today)
        ->delete();
    }
    else
    {
        $lunch_order= new  lunch_order;
        $lunch_order->date=$today;
        $lunch_order->user_id=$user_id;
        $lunch_order->status=1;
        $lunch_order->save();
    }
}

public function changeDinnerStatus(Request $request)
{
    $user_id=Auth::user()->id;
    $today = date('Y-m-d');
    $dinner_data=DB::table('dinner_orders')
    ->where('user_id',$user_id)
    ->where('date',$today)
    ->first();
    if ($dinner_data) {

        $delete=DB::table('dinner_orders')
        ->where('user_id',$user_id)
        ->where('date',$today)
        ->delete();
    }
    else
    {
        $dinner_order= new  dinner_order;
        $dinner_order->date=$today;
        $dinner_order->user_id=$user_id;
        $dinner_order->status=1;
        $dinner_order->save();
    }
}  

public function changeBreakfastStatusTomorrow(Request $request)
{
    $user_id=Auth::user()->id;
    $d = new DateTime('+1day');
    $tomorrow = $d->format('Y-m-d');

    $breakfast_data=DB::table('breakfast_orders')
    ->where('user_id',$user_id)
    ->where('date',$tomorrow)
    ->first();
    if ($breakfast_data) {

        $delete=DB::table('breakfast_orders')
        ->where('user_id',$user_id)
        ->where('date',$tomorrow)
        ->delete();
    }
    else
    {
        $breakfast_order= new  breakfast_order;
        $breakfast_order->date=$tomorrow;
        $breakfast_order->user_id=$user_id;
        $breakfast_order->status=1;
        $breakfast_order->save();
    }
} 

public function changeLunchStatusTomorrow(Request $request)
{
    $user_id=Auth::user()->id;
    $d = new DateTime('+1day');
    $tomorrow = $d->format('Y-m-d');
    $lunch_data=DB::table('lunch_orders')
    ->where('user_id',$user_id)
    ->where('date',$tomorrow)
    ->first();
    if ($lunch_data) {

        $delete=DB::table('lunch_orders')
        ->where('user_id',$user_id)
        ->where('date',$tomorrow)
        ->delete();
    }
    else
    {
        $lunch_order= new  lunch_order;
        $lunch_order->date=$tomorrow;
        $lunch_order->user_id=$user_id;
        $lunch_order->status=1;
        $lunch_order->save();
    }
}

public function changeDinnerStatusTomorrow(Request $request)
{
    $user_id=Auth::user()->id;
    $d = new DateTime('+1day');
    $tomorrow = $d->format('Y-m-d');
    $dinner_data=DB::table('dinner_orders')
    ->where('user_id',$user_id)
    ->where('date',$tomorrow)
    ->first();
    if ($dinner_data) {

        $delete=DB::table('dinner_orders')
        ->where('user_id',$user_id)
        ->where('date',$tomorrow)
        ->delete();
    }
    else
    {
        $dinner_order= new  dinner_order;
        $dinner_order->date=$tomorrow;
        $dinner_order->user_id=$user_id;
        $dinner_order->status=1;
        $dinner_order->save();
    }
}  

public function show_orders()
{
   $today = date('Y-m-d');
   $showToday = date('d-m-Y');

   $d = new DateTime('+1day');
   $tomorrow = $d->format('Y-m-d');
   $showTomorrow = $d->format('d-m-Y');

   $breakfast_count=breakfast_order::where('date',$today)->get()->count();
   $lunch_count=lunch_order::where('date',$today)->get()->count();
   $dinner_count=dinner_order::where('date',$today)->get()->count();
   $breakfast_participants=breakfast_order::where('date',$today)->get();
   $lunch_participants=lunch_order::where('date',$today)->get();
   $dinner_participants=dinner_order::where('date',$today)->get();

   $breakfast_count_tomorrow=breakfast_order::where('date',$tomorrow)->get()->count();
   $lunch_count_tomorrow=lunch_order::where('date',$tomorrow)->get()->count();
   $dinner_count_tomorrow=dinner_order::where('date',$tomorrow)->get()->count();
   $breakfast_participants_tomorrow=breakfast_order::where('date',$tomorrow)->get();
   $lunch_participants_tomorrow=lunch_order::where('date',$tomorrow)->get();
   $dinner_participants_tomorrow=dinner_order::where('date',$tomorrow)->get();

   return view('admin.show_orders',compact('breakfast_count','lunch_count','dinner_count','breakfast_participants','lunch_participants','dinner_participants','showToday','breakfast_count_tomorrow','lunch_count_tomorrow','dinner_count_tomorrow','breakfast_participants_tomorrow','lunch_participants_tomorrow','dinner_participants_tomorrow','showTomorrow'));
}

public function add_cost()
{
    $today = date('Y-m-d');
    $showToday = date('d-m-Y');
    $d = new DateTime('-1day');
    $yesterday = $d->format('Y-m-d');
    $showYesterday = $d->format('d-m-Y');
//today's cost
    if(breakfast_cost::where('date',$today)->exists())
     {$breakfastCost_today=breakfast_cost::where('date',$today)->first()->total_cost;}
    else{$breakfastCost_today="Not set";}

    if(lunch_cost::where('date',$today)->exists())
     {$lunchCost_today=lunch_cost::where('date',$today)->first()->total_cost;}
    else{$lunchCost_today="Not set";}

    if(dinner_cost::where('date',$today)->exists())
     {$dinnerCost_today=dinner_cost::where('date',$today)->first()->total_cost;}
    else{$dinnerCost_today="Not set";}
//yesterday's cost 
    if(breakfast_cost::where('date',$yesterday)->exists())
     {$breakfastCost_yesterday=breakfast_cost::where('date',$yesterday)->first()->total_cost;}
    else{$breakfastCost_yesterday="Not set";}

    if(lunch_cost::where('date',$yesterday)->exists())
     {$lunchCost_yesterday=lunch_cost::where('date',$yesterday)->first()->total_cost;}
    else{$lunchCost_yesterday="Not set";}

    if(dinner_cost::where('date',$yesterday)->exists())
     {$dinnerCost_yesterday=dinner_cost::where('date',$yesterday)->first()->total_cost;}
    else{$dinnerCost_yesterday="Not set";}

    return view('admin.add_cost',compact('showToday','showYesterday','breakfastCost_today','lunchCost_today','dinnerCost_today','breakfastCost_yesterday','lunchCost_yesterday','dinnerCost_yesterday','today','yesterday'));
}

public function save_cost($id,Request $request)
{
  $validatedData = $request->validate([
        'breakfast_cost' => 'integer',
        'lunch_cost' => 'integer',
        'dinner_cost' => 'integer',
    ]);
   $date=$id;

   $breakfast_count=breakfast_order::where('date',$date)->get()->count();
   if($breakfast_count==0){$breakfast_count=1;}
   $breakfast_individual_cost=($request->breakfast_cost/$breakfast_count);

   $lunch_count=lunch_order::where('date',$date)->get()->count();
   if($lunch_count==0){$lunch_count=1;}
   $lunch_individual_cost=($request->lunch_cost/$lunch_count);

   $dinner_count=dinner_order::where('date',$date)->get()->count();
   if($dinner_count==0){$dinner_count=1;}
   $dinner_individual_cost=($request->dinner_cost/$dinner_count);

  if(breakfast_cost::where('date',$date)->exists())
     {
        breakfast_cost::where('date',$date)
         ->update(['participant' => $breakfast_count,
                    'total_cost' => $request->breakfast_cost,
                    'individual_cost' => $breakfast_individual_cost
                  ]);
        
      }
    else
      {
        $breakfast_cost= new  breakfast_cost;
        $breakfast_cost->date=$date;
        $breakfast_cost->participant=$breakfast_count;
        $breakfast_cost->total_cost=$request->breakfast_cost;
        $breakfast_cost->individual_cost=$breakfast_individual_cost;
        $breakfast_cost->save();
        
      }

      if(lunch_cost::where('date',$date)->exists())
     {
        lunch_cost::where('date',$date)
         ->update(['participant' => $lunch_count,
                    'total_cost' => $request->lunch_cost,
                    'individual_cost' => $lunch_individual_cost
                  ]);
        
      }
    else
      {
        $lunch_cost= new  lunch_cost;
        $lunch_cost->date=$date;
        $lunch_cost->participant=$lunch_count;
        $lunch_cost->total_cost=$request->lunch_cost;
        $lunch_cost->individual_cost=$lunch_individual_cost;
        $lunch_cost->save();
        
      }

      if(dinner_cost::where('date',$date)->exists())
     {
        dinner_cost::where('date',$date)
         ->update(['participant' => $dinner_count,
                    'total_cost' => $request->dinner_cost,
                    'individual_cost' => $dinner_individual_cost
                  ]);
        
      }
    else
      {
        $dinner_cost= new  dinner_cost;
        $dinner_cost->date=$date;
        $dinner_cost->participant=$dinner_count;
        $dinner_cost->total_cost=$request->dinner_cost;
        $dinner_cost->individual_cost=$dinner_individual_cost;
        $dinner_cost->save();
       
      }
  return Redirect() -> route('add_cost');
}

public function show_bill()
{
$month = date('m');
$now = new DateTime();
$previousMonth = $now->modify('first day of previous month');
$previous_month= $previousMonth->format('m');

DB::statement("CREATE OR REPLACE VIEW monthly_costs AS
select  user_name,  id, phone, sum(cost) as cost from (
        select users.name as user_name, users.roll as id,users.phone as phone, BC.individual_cost as cost
        from breakfast_orders BO, breakfast_costs BC,users
        WHERE (BO.date=BC.date) and (BO.user_id=users.id)and MONTH(BO.date)='$month'
        UNION ALL
        select users.name as user_name, users.roll as id,users.phone as phone, LC.individual_cost as cost
        from lunch_orders LO, lunch_costs LC,users
        WHERE (LO.date=LC.date) and (LO.user_id=users.id) and MONTH(LO.date)='$month'
        UNION ALL
        select users.name as user_name, users.roll as id,users.phone as phone, DC.individual_cost as cost
        from dinner_orders ddO, dinner_costs DC,users
        WHERE (ddO.date=DC.date) and (ddO.user_id=users.id) and MONTH(ddO.date)='$month'
            ) x group by id,user_name,phone");
 
DB::statement("CREATE OR REPLACE VIEW previous_monthly_costs AS
select  user_name,  id, phone, sum(cost) as cost from (
        select users.name as user_name, users.roll as id,users.phone as phone, BC.individual_cost as cost
        from breakfast_orders BO, breakfast_costs BC,users
        WHERE (BO.date=BC.date) and (BO.user_id=users.id)and MONTH(BO.date)='$previous_month'
        UNION ALL
        select users.name as user_name, users.roll as id,users.phone as phone, LC.individual_cost as cost
        from lunch_orders LO, lunch_costs LC,users
        WHERE (LO.date=LC.date) and (LO.user_id=users.id) and MONTH(LO.date)='$previous_month'
        UNION ALL
        select users.name as user_name, users.roll as id,users.phone as phone, DC.individual_cost as cost
        from dinner_orders ddO, dinner_costs DC,users
        WHERE (ddO.date=DC.date) and (ddO.user_id=users.id) and MONTH(ddO.date)='$previous_month'
            ) x group by id,user_name,phone");


$record=monthly_cost::all();
return view('admin.show_bill',compact('record'));

}
public function export() 
    {
        $month_name=date('F Y');
        return Excel::download(new UsersExport, "'$month_name'.xlsx");
    }
public function export_LastMonth() 
    {
        //$month_name=date('F Y');
      $date_time = new \DateTime('last month');
      $last_month = $date_time->format('F Y');
        return Excel::download(new UsersExportLastMonth, "'$last_month'.xlsx");
    }
}

