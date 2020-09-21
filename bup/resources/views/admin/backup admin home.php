@extends('layouts.admin_app')

@section('content')

   <div id="content" class="span10">
   <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{route('home')}}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('admin.home')}}">Dashboard</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <i class="halflings-icon time"></i>
                    <span class="date">{{$showToday}}, <b>{{$day}}</b></span></li>
            </ul>

            <div class="row-fluid">
                
                <div class="span4 statbox purple" onTablet="span6" onDesktop="span4">
                  <p align="center">Breakfast</p>
                    <div class="span3">
                    <ul class="list-group">
                     @foreach($b1 as $row)
                         <li class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ul>
                  </div>
                </div>
                <div class="span4 statbox blueDark" onTablet="span6" onDesktop="span4">
                   <p align="center">Lunch</p>
                    <div class="span3">
                    <ul class="list-group">
                      @foreach($l1 as $row)
                         <li class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ul>
                  </div>
                </div>
                <div class="span4 statbox greenDark noMargin" onTablet="span6" onDesktop="span4">
                    <p align="center">Dinner</p>
                    <div class="span3">
                    <ul class="list-group">
                      @foreach($d1 as $row)
                         <li class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ul>
                  </div> 
                </div> 
            </div>    
              
            
            <div class="row-fluid hideInIE8 circleStats">
                
                <div class="span4" onTablet="span4" onDesktop="span4">
                    <div class="circleStatsItemBox green">
                        <div class="header">Breakfast</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$breakfast_participants}}" class="whiteCircle" />
                        </div>      
                     </div>
                </div>

                <div class="span4" onTablet="span4" onDesktop="span4">
                    <div class="circleStatsItemBox red">
                        <div class="header">Lunch</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$lunch_participants}}" class="whiteCircle" />
                        </div>
                    </div>
                </div>

                <div class="span4" onTablet="span4" onDesktop="span4">
                    <div class="circleStatsItemBox black">
                        <div class="header">Dinner</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$dinner_participants}}" class="whiteCircle" />
                        </div>
                    </div>
                </div>
            </div>      
                        
           

        <div class="row-fluid">
           <div class="widget yellow span12 noMargin" onTablet="span12" onDesktop="span12">
                    <h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
                    <hr>
                    <div class="content">
                         <div id="serverLoad2" style="height:224px;"></div>
                    </div>
                </div>
            
            </div>
            
            <div class="row-fluid">
              <div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
                    <div class="box-header">
                        <h2><i class="halflings-icon white check"></i><span class="break"></span>Upcoming Breakfast</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="todo metro">
                            <ul class="todo-list">
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>    
                                    Windows Phone 8 App 
                                    <strong>today</strong>
                                </li>
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>today</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>tommorow</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Windows Phone 8 App
                                    <strong>tommorow</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this week</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this week</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this month</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this month</strong>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>

                  <div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
                    <div class="box-header">
                        <h2><i class="halflings-icon white check"></i><span class="break"></span>Upcoming Lunch</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="todo metro">
                            <ul class="todo-list">
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>    
                                    Windows Phone 8 App 
                                    <strong>today</strong>
                                </li>
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>today</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>tommorow</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Windows Phone 8 App
                                    <strong>tommorow</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this week</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this week</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this month</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this month</strong>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>

                  <div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
                    <div class="box-header">
                        <h2><i class="halflings-icon white check"></i><span class="break"></span>Upcoming Dinner</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="todo metro">
                            <ul class="todo-list">
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>    
                                    Windows Phone 8 App 
                                    <strong>today</strong>
                                </li>
                                <li class="red">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>today</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>tommorow</strong>
                                </li>
                                <li class="yellow">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Windows Phone 8 App
                                    <strong>tommorow</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this week</strong>
                                </li>
                                <li class="green">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this week</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this month</strong>
                                </li>
                                <li class="blue">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Hire developers
                                    <strong>this month</strong>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
            
            </div>
            
            <div class="row-fluid"> 

                <a class="quick-button metro yellow span2">
                    <i class="icon-group"></i>
                    <p>Users</p>
                    <span class="badge">237</span>
                </a>
                <a class="quick-button metro red span2">
                    <i class="icon-comments-alt"></i>
                    <p>Comments</p>
                    <span class="badge">46</span>
                </a>
                <a class="quick-button metro blue span2">
                    <i class="icon-shopping-cart"></i>
                    <p>Orders</p>
                    <span class="badge">13</span>
                </a>
                <a class="quick-button metro green span2">
                    <i class="icon-barcode"></i>
                    <p>Products</p>
                </a>
                <a class="quick-button metro pink span2">
                    <i class="icon-envelope"></i>
                    <p>Messages</p>
                    <span class="badge">88</span>
                </a>
                <a class="quick-button metro black span2">
                    <i class="icon-calendar"></i>
                    <p>Calendar</p>
                </a>
                
                <div class="clearfix"></div>
                                
            </div><!--/row-->

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->

            </div><!--/#content.span10-->
        </div><!--/fluid-row-->
@endsection
