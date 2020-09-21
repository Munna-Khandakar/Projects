@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Today's Cost ({{$showToday}})</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
					<form class="form-horizontal" action="{{url('save/cost/'.$today)}}" method="post" enctype="multipart/form-data">
          @csrf
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Breakfast</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="breakfast_cost" size="16" type="text" value="{{$breakfastCost_today}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Lunch</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="lunch_cost"size="16" type="text" value="{{$lunchCost_today}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Dinner</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="dinner_cost" size="16" type="text" value="{{$dinnerCost_today}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend input-append">
								<button class="btn btn-small btn-inverse">Save</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div><!--/span-->
	<!-- yesterday-->
		<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Yesterday's Cost ({{$showYesterday}})</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="{{url('save/cost/'.$yesterday)}}" method="post" enctype="multipart/form-data">
          @csrf
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Breakfast</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="breakfast_cost" size="16" type="text" value="{{$breakfastCost_yesterday}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Lunch</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="lunch_cost" size="16" type="text" value="{{$lunchCost_yesterday}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="appendedPrependedInput">Dinner</label>
						<div class="controls">
							<div class="input-prepend input-append">
								<span class="add-on">৳</span><input id="appendedPrependedInput" name="dinner_cost" size="16" type="text" value="{{$dinnerCost_yesterday}}"><span class="add-on">.00</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend input-append">
								<button class="btn btn-small btn-inverse">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!--/span-->
</div><!--/row-->
@endsection