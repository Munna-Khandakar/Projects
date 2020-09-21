@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
	<div class="box-content">
		<span class="label label-inverse"><h2>Today's Order ({{$showToday}})</h2></span>
		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Breakfast Order<i>({{$showToday}})</i><span class="label label-important">{{$breakfast_count}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($breakfast_participants as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->

		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Lunch Order<i>({{$showToday}})</i><span class="label label-important">{{$lunch_count}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($lunch_participants as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->

		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Dinner Order<i>({{$showToday}})</i><span class="label label-important">{{$dinner_count}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($dinner_participants as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->
	</div>
</div>

<h2>Tomorrow ({{$showToday}})</h2>

<div id="content" class="span10">
	<div class="box-content">
		<span class="label label-inverse"><h2>Tomorrow's Order ({{$showTomorrow}})</h2></span>
		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Breakfast Order<i>({{$showTomorrow}})</i><span class="label label-important">{{$breakfast_count_tomorrow}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($breakfast_participants_tomorrow as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->

		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Lunch Order<i>({{$showTomorrow}})</i><span class="label label-important">{{$lunch_count_tomorrow}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($lunch_participants_tomorrow as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->

		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Dinner Order<i>({{$showTomorrow}})</i><span class="label label-important">{{$dinner_count_tomorrow}} </span></h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>Phone</th>
								<th>Id</th>
								<th>Role</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($dinner_participants_tomorrow as $order)
							<tr>
								<td>
									{{$order->user->name}}
								</td>
								<td class="center">+880{{$order->user->phone}}</td>
								<td class="center">{{$order->user->roll}}</td>
								@if($order->user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
							</tr>
							@endforeach                               
						</tbody>
					</table>  
					<div class="pagination pagination-centered">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>     
				</div>
			</div><!--/span-->
		</div><!--/row-->
	</div>
</div>
@endsection