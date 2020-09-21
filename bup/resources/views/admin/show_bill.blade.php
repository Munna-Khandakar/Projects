@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
	<div class="box-content">
		<div class="row-fluid sortable">	
			<div class="box span12">
				<div class="box-header">
					<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Total Bill of current month</h2>
					<div class="box-icon">
						<a href="{{ route('export_excel.excel') }}"><i class="halflings-icon download-alt"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					<table class="table table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>Username</th>
								<th>ID</th>
								<th>Phone</th>
								<th>Cost</th>                                          
							</tr>
						</thead>   
						<tbody>
							@foreach($record as $user)
							<tr>
								<td>{{$user->user_name}}</td>
								<td class="center">{{$user->id}}</td> 
								<td class="center">+880{{$user->phone}}</td>
								<td class="center">{{$user->cost}}</td> 
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
		<div class="attachments">

					<ul>
						<span class="label label-success">xls</span> <b>Present Month Bill.xls</b>
						<span class="quickMenu">
						<a href="{{ route('export_excel.excel') }}" class="glyphicons cloud-download"><i></i></a>
						</span>
					</ul>	
					<ul>
						<span class="label label-info">xls</span> <b>Last Month Bill.xls</b>
						<span class="quickMenu">
						<a href="{{ route('export_excel_LastMonth.excel') }}" class="glyphicons cloud-download"><i></i></a>
						</span>
					</ul>		
				</div>
	</div>

</div>
@endsection