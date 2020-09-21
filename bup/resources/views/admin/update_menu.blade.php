@extends('layouts.admin_app')
@section('content')
<div id="content" class="span10">
<div class="row-fluid">



				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Breakfast</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
				<div class="box-content">
				<form action="{{url('update/breakfast_menu/'.$day_id)}}" method="post" enctype="multipart/form-data">
          @csrf
          		<div class="control-group">
				<label class="control-label" for="selectError1">Edit Breakfast Menu</label>
				<div class="controls">
				<select id="selectError1" multiple data-rel="chosen" name="menuBreakfast[]" required="required">
				@foreach($breakfast as $row)
				<option value="{{$row->id}}">
					{{$row->item}}
				</option>
				@endforeach
				@foreach($breakfast_selected as $row)
				<option selected value="{{$row->item_id}}">
					{{$row->item->item}}
				</option>
				@endforeach					
				</select>
				</div>
				</div>
				<input type="submit" class="btn btn-info" value="Save">
          		</form>
						
				</div>
				</div><!--/span-->



				
				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Lunch</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		<form action="{{url('update/lunch_menu/'.$day_id)}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="control-group">
				<label class="control-label" for="selectError2">Edit Lunch Menu</label>
				<div class="controls">
				<select id="selectError2" multiple data-rel="chosen" name="menuLunch[]" required="required">
				@foreach($lunch as $row)
				<option value="{{$row->id}}">
					{{$row->item}}
				</option>
				@endforeach
				@foreach($lunch_selected as $row)
				<option selected value="{{$row->item_id}}">
					{{$row->item->item}}
				</option>
				@endforeach					
				</select>
				</div>
				</div>

		<input type="submit" class="btn btn-info" value="Save">
        </form>
		</div>
		</div><!--/span-->

				<div class="box span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon list"></i><span class="break"></span>Dinner</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		<form action="{{url('update/dinner_menu/'.$day_id)}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="control-group">
				<label class="control-label" for="selectError3">Edit Dinner Menu</label>
				<div class="controls">
				<select id="selectError3" multiple data-rel="chosen" name="menuDinner[]" required="required">
				@foreach($dinner as $row)
				<option value="{{$row->id}}">
					{{$row->item}}
				</option>
				@endforeach
				@foreach($dinner_selected as $row)
				<option selected value="{{$row->item_id}}">
					{{$row->item->item}}
				</option>
				@endforeach					
				</select>
				</div>
				</div>

		<input type="submit" class="btn btn-info" value="Save">
        </form>
		</div>
		</div><!--/span-->

				

	</div>
</div>
@endsection