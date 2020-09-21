@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
	<div class="box-content">
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Weekly Menu</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									   	<th>Day</th>
										<th>Breakfast</th>
										<th>Lunch</th>
										<th>Dinner</th>
										<th>Actions</th>                                          
								  </tr>
							  </thead>   
							  <tbody>

							<tr>
							<td>Saturday</td>
							<td class="center">
								@foreach($b1 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l1 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d1 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',1)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Sundayday</td>
							<td class="center">
								@foreach($b2 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l2 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d2 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',2)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Monday</td>
							<td class="center">
								@foreach($b3 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l3 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d3 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',3)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Tuesday</td>
							<td class="center">
								@foreach($b4 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l4 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d4 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',4)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Wednesday</td>
							<td class="center">
								@foreach($b5 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l5 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d5 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',5)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Thursday</td>
							<td class="center">
								@foreach($b6 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l6 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d6 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',6)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>

							<tr>
							<td>Friday</td>
							<td class="center">
								@foreach($b7 as $row)
								{{$row->item}},
								@endforeach
							</td>
							<td class="center">
								@foreach($l7 as $row)
								{{$row->item}},
								@endforeach
							</td>
								<td class="center">
								@foreach($d7 as $row)
								{{$row->item}},
								@endforeach
								</td>
								<td class="center">
								<a class="btn btn-danger" href="{{url('edit/menu',7)}}">
									<i class="halflings-icon white edit"></i> 
								</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection