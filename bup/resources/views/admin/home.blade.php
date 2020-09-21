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



                <div class="span4 statbox  " style="  background: linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d);font-size: 20px; border-radius: 5px;border: 1px solid; color: rgb(231, 231, 231);  " onTablet="span6" onDesktop="span4">
                  <p align="center" >Breakfast</p>
                    <div class="span3">
                    <ol class="list-group">
                     @foreach($b1 as $row)
                         <li style="list-style-type: number; font-size: 15px; color: rgb(230, 223, 223);" class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ol>
                  </div>
                </div>
                <div class="span4 statbox " style="background: linear-gradient(to right, #283048, #859398);font-size: 20px; color: rgb(240, 231, 231); border-radius: 5px;border: 1px solid;" onTablet="span6" onDesktop="span4">
                   <p align="center">Lunch</p>
                    <div class="span3">
                    <ol class="list-group">
                      @foreach($l1 as $row)
                         <li style="list-style-type: number; font-size: 15px; color: rgb(255, 248, 248);"  class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ol>
                  </div>
                </div>
                <div class="span4 statbox  noMargin"  style="background-image: linear-gradient( 111.6deg,  rgba(193,145,103,1) -0.5%, rgba(84,20,80,0.96) 50.9%, rgba(8,52,70,1) 99.8% );font-size: 20px; color: rgb(231, 231, 231); border-radius: 5px;border: 1px solid;" onTablet="span6" onDesktop="span4">
                    <p align="center">Dinner</p>
                    <div class="span3">
                    <ol class="list-group">
                      @foreach($d1 as $row)
                         <li style="list-style-type: number; font-size: 15px; color: rgb(248, 248, 248);"  class="list-group-item">{{$row->item}}</li>
                    @endforeach
                    </ol>
                  </div>
                </div>
            </div>


            <div class="row-fluid hideInIE8 circleStats">

                <div class="span4" onTablet="span4"  style="background-image: radial-gradient( circle farthest-corner at 6.6% 12%,  rgba(64,0,126,1) 20.8%, rgba(0,255,160,1) 100.2% ); font-size: 20px; color: rgb(231, 231, 231); border-radius: 5px;border: 1px solid;" onDesktop="span4">
                    <div class="circleStatsItemBox  ">
                        <div class="header">Breakfast</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$breakfast_participants}}" class="whiteCircle" />
                        </div>
                     </div>
                </div>

                <div class="span4"  style="background: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);font-size: 20px; color: rgb(231, 231, 231); border-radius: 5px;border: 1px solid;" onTablet="span4" onDesktop="span4">
                    <div class="circleStatsItemBox ">
                        <div class="header">Lunch</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$lunch_participants}}" class="whiteCircle" />
                        </div>
                    </div>
                </div>

                <div class="span4"  style="background: linear-gradient(to right, #000000 34%, #666699 101%);font-size: 20px; color: rgb(231, 231, 231); border-radius: 5px;border: 1px solid;" onTablet="span4" onDesktop="span4">
                    <div class="circleStatsItemBox ">
                        <div class="header">Dinner</div>
                        <span class="percent">person</span>
                        <div class="circleStat">
                            <input type="text" value="{{$dinner_participants}}" class="whiteCircle" />
                        </div>
                    </div>
                </div>
            </div>
<br><br> <hr>




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
                    <div class="box-content" >
                        <div class="todo metro">
                            <ul class="todo-list">
                                @foreach($b1 as $row)

                                @endforeach
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Polao
                                    <strong>today</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Dal
                                    <strong>today</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Sobji
                                    <strong>today</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Vaji
                                    <strong>tommorow</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                   Khichuri
                                    <strong>this week</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                   Dim
                                    <strong>this week</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Khichuri
                                    <strong>this month</strong>
                                </li>
                                <li class=" " >
                                    <a class="action icon-check-empty" href="#"></a>
                                    Khichuri
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
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Beaf

                                    <strong>today</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Dal
                                    <strong>today</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                   Sobji
                                    <strong>tommorow</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                   Fish
                                    <strong>tommorow</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    New frontend layout
                                    <strong>this week</strong>
                                </li>

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
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                   Meat
                                    <strong>today</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                   Rice
                                    <strong>today</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Special Item
                                    <strong>tommorow</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                   Meat
                                    <strong>tommorow</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Alu vorta
                                    <strong>this week</strong>
                                </li>
                                <li class=" ">
                                    <a class="action icon-check-empty" href="#"></a>
                                    Begun vaji
                                    <strong>this week</strong>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row-fluid">

                <a class="quick-button metro black span2">
                    <i class="icon-group"></i>
                    <p>Users</p>
                    <span class="badge">237</span>
                </a>

                <a class="quick-button metro black span2">
                    <i class="icon-shopping-cart"></i>
                    <p>Orders</p>
                    <span class="badge">13</span>
                </a>

                <a class="quick-button metro black span2">
                    <i class="icon-envelope"></i>
                    <p>All Messages</p>
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
