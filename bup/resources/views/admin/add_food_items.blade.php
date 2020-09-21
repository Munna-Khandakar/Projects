@extends('layouts.admin_app')
@section('content')

<div id="content" class="span10">

<div class="container">
  <h2>ADD Items</h2>
  <p>You can add the new food items here</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Previouos Item</th>
        <th>New Item</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<form action="{{route('add/item/breakfast')}}" method="get">
        @csrf
	        <td>
                <select class="form-control" name="category_id">
                	<option> Breakfast </option>
                @foreach($breakfast as $row)
              	<option> {{$row->item}} </option>
              	@endforeach
              </select>
            </td>
	        <td>
	        	<input type="text" class="form-control" name="item">
	        </td>
	        <td>
                <button type="submit" class="btn btn-primary">Add</button>
            </td>
      	</form>
      </tr>
        <tr>
      	<form action="{{route('add/item/lunch')}}" method="get">
        @csrf
	        <td>
                <select class="form-control" name="category_id">
                	<option> Lunch </option>
                @foreach($lunch as $row)
              	<option> {{$row->item}} </option>
              	@endforeach
              </select>
            </td>
	        <td>
	        	<input type="text" class="form-control" name="item">
	        </td>
	        <td>
                <button type="submit" class="btn btn-primary">Add</button>
            </td>
      	</form>
      </tr>
        <tr>
      	<form action="{{route('add/item/dinner')}}" method="get">
        @csrf
	        <td>
                <select class="form-control" name="category_id">
                	<option> Dinner </option>
                @foreach($dinner as $row)
              	<option> {{$row->item}} </option>
              	@endforeach
              </select>
            </td>
	        <td>
	        	<input type="text" class="form-control" name="item">
	        </td>
	        <td>
                <button type="submit" class="btn btn-primary">Add</button>
            </td>
      	</form>
      </tr>
    </tbody>
  </table>
</div>

</div>

@endsection