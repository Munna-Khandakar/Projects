@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
	
	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Username</th>
								  <th>Phone</th>
								  <th>Id</th>
								  <th>Role</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($data as $user)
							<tr>
								<td>
									@if($user->isOnline())
									<i class="fa fa-circle" style="font-size:7px;color:green"></i>
									@endif
									{{$user->name}}
								</td>
								<td class="center">+880{{$user->phone}}</td>
								<td class="center">{{$user->roll}}</td>
								@if($user->is_admin ==1) 
								<td class="center">
									<span class="label label-important">Admin</span>
								</td>
								@else
								<td class="center">
									<span class="label label-success">User</span>
								</td>
								@endif
									<td class="center">
										<a class="btn btn-primary" href="{{url('edit/users/'.$user->id)}}">
											<i class="halflings-icon white edit"></i> 
										</a>
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
							</tr>
							@endforeach
						</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

</div>


@endsection
