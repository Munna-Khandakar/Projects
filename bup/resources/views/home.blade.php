@extends('layouts.user_app')
@section('content')
<div id="tm-bg" class="img-fluid">
  <div>
    
    <img class="img-logo " src="user/img/logo.png" alt="logo">
  </div>
</div>
<div id="tm-wrap">
  <div class="tm-main-content">
    <div class="container tm-site-header-container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
          <div class="tm-site-header">
            <img src="user/img/underline.png" class="img-fluid mb-4">
            <p>BUP Hall Management System</p>
          </div>
          <div id="musa"></div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <div class="content">
            <div class="grid">
              <div class="grid__item">
                <div class="product">
                  <div class="tm-nav-link">
                    <i class="  fas fa-utensils   fa-3x tm-nav-icon"></i>
                    <span class="tm-nav-text">Meal</span>
                    <div class="product__bg"></div>
                  </div>
                  <div class="product__description">
                    
                    <div class="p-sm-4 p-2">
                      
                      <div class="row mb-3">
                        <div class="col-12">
                          <h2 class="tm-page-title">Meal</h2>
                        </div>
                        <div class="col-6">
                          <h5 class="tm-page-title">Click to confirm for all day</h5>
                          <button class="btn btn-success  " href="#">I am in</button>
                          <button class="btn btn-danger  " href="#">Sorry</button>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-12">
                          <!-- cards start-->
                          <h5 class="tm-page-title">Customize your schedule.</h5>
                          
                          <table style="text-align: center; " class="table table-hover table-bordered onload">
                            <thead>
                              <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Breakfast</th>
                                <th scope="col">Lunch</th>
                                <th scope="col">Dinner</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- today -->
<tr>
  <th style="transform: translateY(30%);" scope="row">{{$today_date}}({{$today_day}})</th>
  <td id="fill_breakfast">
    @foreach($today_breakfast as $row)
    <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
    @endforeach
    <br>
    
    <!-- Rounded switch -->
    @php
    date_default_timezone_set('Asia/Dhaka');
    $breakfastLastTime = "06:30:00";
    @endphp
    <label class="switch">
      <input type="checkbox" @if($today_breakfast_status==1) checked @endif onchange="orderBreakfastToday()" @if(time() >= strtotime($breakfastLastTime))disabled="disable" @endif>
      <div class="slider round"></div>
    </label>
  </td>
  <td id="fill_lunch">
    @foreach($today_lunch as $row)
    <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
    @endforeach
    <br>
    <!-- Rounded switch -->
    @php
    date_default_timezone_set('Asia/Dhaka');
    $lunchLastTime = "13:30:00";
    @endphp
    <label class="switch"><input type="checkbox" @if($today_lunch_status==1) checked @endif onchange="orderLunchToday()" @if(time() >= strtotime($lunchLastTime))disabled="disable" @endif><div class="slider round"></div></label>
  </td>
  <td id="fill_dinner">
    @foreach($today_dinner as $row)
    <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
    @endforeach
    <br>
    <!-- Rounded switch -->
    @php
    date_default_timezone_set('Asia/Dhaka');
    $dinnerLastTime = "18:30:00";
    @endphp
    <label class="switch"><input type="checkbox" @if($today_dinner_status==1) checked @endif onchange="orderDinnerToday()"  @if(time() >= strtotime($dinnerLastTime))disabled="disable" @endif><div class="slider round"></div></label>
  </td>
</tr>

                                <!-- tomorrow -->
                                <tr>
                                <th style="transform: translateY(30%);" scope="row">{{$tomorrow_date}}({{$tomorrow_day}})</th>
                                <td id="fill_breakfast">
                                  @foreach($tomorrow_breakfast as $row)
                                  <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
                                  @endforeach
                                  <br>
                                  
                                  <!-- Rounded switch -->
                                  <label class="switch">
                                    <input type="checkbox" @if($tomorrow_breakfast_status==1) checked @endif onchange="orderBreakfastTomorrow()">
                                    <div class="slider round"></div>
                                  </label>


                                  
                                </td>
                                <td id="fill_lunch">
                                  @foreach($tomorrow_lunch as $row)
                                  <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
                                  @endforeach
                                  <br>
                                  <!-- Rounded switch -->
                                  <label class="switch"><input type="checkbox" @if($tomorrow_lunch_status==1) checked @endif onchange="orderLunchTomorrow()"><div class="slider round"></div></label>
                                </td>

                                <td id="fill_dinner">
                                  @foreach($tomorrow_dinner as $row)
                                  <li style="list-style-type: none; font-size: 11px;">{{$row->item->item}} </li>
                                  @endforeach
                                  <br>
                                  <!-- Rounded switch -->
                                  <label class="switch"><input type="checkbox" @if($tomorrow_dinner_status==1) checked @endif onchange="orderDinnerTomorrow()"><div class="slider round"></div></label>
                                </td>
                                </tr>
                              </tbody>
                         </table>
                          
                          <!-- cards end-->
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="p-sm-4 p-2 tm-img-container">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid__item" id="team-link">
                <div class="product">
                  <div class="tm-nav-link">
                    <i class="fas fa-dollar-sign fa-3x tm-nav-icon"></i>
                    <span class="tm-nav-text">Cost List</span>
                    <div class="product__bg"></div>
                  </div>
                  <div class="product__description">
                    <div class="p-sm-4 p-2">
                      <div class="row mb-3">
                        <div class="col-12">
                          <h2 class="tm-page-title">Costing till today</h2>
                        </div>
                      </div>
                      <div class="row tm-reverse-sm">
                        <div
                          class="col-sm-12 col-md-8 col-lg-8 col-xl-8   col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                          <!-- card DECk-->
                          <div class="card">
                            <div class="card border-primary">
                              <div class="card-body">
                                <h4 class="card-title text-monospace text-dark">
                                Meal Expenses</h4>
                                <p class="card-text text-dark">
                                  Cost Of this month
                                </p>
                                <table style="text-align: center;color:black; " class="table table-hover table-bordered onload">
                                  <tr>
                                  <td>Breakfast :</td><td>{{$breakfast_cost}}</td>
                                  </tr>
                                  <tr>
                                  <td>Lunch :</td><td>{{$lunch_cost}}</td>
                                  </tr>
                                  <tr>
                                  <td>Dinner :</td><td>{{$dinner_cost}}</td>
                                  </tr>
                                  <tr>
                                  <td>Total :</td><td>{{$total_cost}}</td>
                                  </tr>
                                </table>
                                <a class="btn btn-success btn-block"
                                href="#">Details</a>
                                
                              </div>
                            </div>
                            <br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid__item" id="home-link">
                <div class="product">
                  <div class="tm-nav-link">
                    <i class="fas fa-user fa-3x tm-nav-icon"></i>
                    <span class="tm-nav-text">Profile</span>
                    <div class="product__bg"></div>
                  </div>
                  <div class="product__description">
                    <div class="row mb-3">
                      <div class="col-12">
                        <h2 class="tm-page-title">Profile</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        
                        <div class="card-body">
                          
                          <p class="card-text">
                            Name: {{Auth::user()->name}} <br>
                            ID: {{Auth::user()->roll}}<br>
                            Department: {{Auth::user()->dept}}<br>
                            Email: {{Auth::user()->email}}<br>
                            Phone: +880{{Auth::user()->phone}}<br>
                          </p>
                         @if(Auth::user()->is_admin==1)
                         <a style="position: absolute;" class="btn btn-primary"href="{{ route('admin.home') }}">Dashboard <i class="fas fa-home"></i></a>
                         @endif

                          <a style="position: absolute; right:20px;" class="btn btn-danger"href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout <i class="fas fa-sign-out-alt"></i></a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="product">
                <div class="tm-nav-link">
                  <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                  <span class="tm-nav-text">Remarks</span>
                  <div class="product__bg"></div>
                </div>
                <div class="product__description">
                  <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                    <div class="row mb-3">
                      <div class="col-12">
                        <h2 class="tm-page-title">Remarks</h2>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-12">
                        <p>Lorem ipsum dolor site amet, consectetur adipiscing elit.
                          Aliquam interdum, nisl sed faucibus tempor, massa velit
                          laoreet ipsum, et faucibus sapien magna at enim. Suspendisse
                        a dictum tortor, vel rhoncus libero.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <form action="" method="post" class="contact-form">
                          @csrf
                          <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-xl-6">
                              <input type="number"
                              name="roll_no" class="form-control"
                              placeholder="ID" required />
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-xl-6">
                              <input type="text"
                              name="subject" class="form-control"
                              placeholder="Subject" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea id="contact_message" name="details"
                            class="form-control" rows="9" placeholder="Details"
                            required></textarea>
                          </div>
                          <button type="submit"
                          class="btn btn-primary tm-btn-submit">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2018</span> BUP ICT.
  Layout: Tooplate</p>
</footer>
</div> <!-- .tm-main-content -->
</div>
@endsection
<script type="text/javascript">
  function orderBreakfastToday()
  {

var currentD = new Date();
var lastTimeToOrder = new Date();
lastTimeToOrder.setHours(6,30,0); // 6.30 am
if(currentD < lastTimeToOrder){
    
   $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeBreakfastStatus',
            data: {},
            success: function(data){
               //window.location.reload(true);

            }
        });
}else{
    document.getElementById("breakfast").disabled = true;
    alert("Sorry, Last time over");
}}

  function orderLunchToday()
  {
var currentD = new Date();
var lastTimeToOrder = new Date();
lastTimeToOrder.setHours(13,30,0); // 1.30 pm
if(currentD < lastTimeToOrder){
    $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeLunchStatus',
            data: {},
            success: function(data){
            
            }
        }); 
    }
    else{
    alert("Sorry, Last time over");
}
  }
  function orderDinnerToday()
  {
    var currentD = new Date();
var lastTimeToOrder = new Date();
lastTimeToOrder.setHours(18,30,0); // 6.30 pm
if(currentD < lastTimeToOrder){
    $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeDinnerStatus',
            data: {},
            success: function(data){
               //window.location.reload(true);

            }
        }); 
    }
    else{
    
    alert("Sorry, Last time over");
}
  }

   function orderBreakfastTomorrow()
  {
    $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeBreakfastStatusTomorrow',
            data: {},
            success: function(data){
               //window.location.reload(true);

            }
        }); 
  }
  function orderLunchTomorrow()
  {
    $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeLunchStatusTomorrow',
            data: {},
            success: function(data){
               //window.location.reload(true);

            }
        }); 
  }
  function orderDinnerTomorrow()
  {
    $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeDinnerStatusTomorrow',
            data: {},
            success: function(data){
               //window.location.reload(true);

            }
        }); 
  }
</script>