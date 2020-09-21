@extends('layouts.admin_app')
@section('content')

<div id="content" class="span10">
<form action="{{route('insert/menu')}}" method="get">
 @csrf
     <div class="col-md-3 col-sm-3">
         <select class="form-control" required="required" name="day_id">
             <option value="" selected disabled hidden>Select Day</option>
             @foreach($day as $row)
                     <option value="{{$row->id}}"> {{$row->day}} </option>
                  @endforeach
              
        </select>
    </div>
    <div class="card-body"><h2>Breakfast</h2>
      <div class="col-md-3 col-sm-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                ADD Item
              </th>
              <th style="text-align: center;"><a href="#" class="btn btn-info addBreakfast">+</a>
              </th>
            </tr>
          </thead>

          <tbody class="breakfast_box">
            <tr>
              <td>
                <select name="menuBreakfast[]" class="form-control" required="required">
                  <option value="" selected disabled hidden>Select Item</option>
                  @foreach($breakfast as $row)
                     <option value="{{$row->id}}"> {{$row->item}} </option>
                  @endforeach
                </select>
              </td>
                <td style="text-align: center;"><a href="#" class="btn btn-danger removeBreakfast">-</a>
              </td>
            </tr>

          </tbody>

        </table>
       </div>
     </div>




    <div class="card-body"><h2>Lunch</h2>
      
      <div class="col-md-3 col-sm-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                ADD Item
              </th>
              <th style="text-align: center;"><a href="#" class="btn btn-info addLunch">+</a>
              </th>
            </tr>
          </thead>

          <tbody class="lunch_box">
            <tr>
              <td>
                <select name="menuLunch[]" class="form-control" required="required">
                  <option value="" selected disabled hidden>Select Item</option>
                  @foreach($lunch as $row)
                     <option value="{{$row->id}}"> {{$row->item}} </option>
                  @endforeach
                </select>
              </td>
                <td style="text-align: center;"><a href="#" class="btn btn-danger removeLunch">-</a>
              </td>
            </tr>

          </tbody>

        </table>
       </div>
     </div>

    <div class="card-body"><h2>Dinner</h2>
      
      <div class="col-md-3 col-sm-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                ADD Item
              </th>
              <th style="text-align: center;"><a href="#" class="btn btn-info addDinner">+</a>
              </th>
            </tr>
          </thead>

          <tbody class="dinner_box">
            <tr>
              <td>
                <select name="menuDinner[]" class="form-control" required="required">
                  <option value="" selected disabled hidden>Select Item</option>
                  @foreach($dinner as $row)
                     <option value="{{$row->id}}"> {{$row->item}} </option>
                  @endforeach
                </select>
              </td>
                <td style="text-align: center;"><a href="#" class="btn btn-danger removeDinner">-</a>
              </td>
            </tr>

          </tbody>

        </table>
       </div>
     </div>
     <button type="submit" class="btn btn-success">Save</button>
</form>

</div>

<script type="text/javascript">
  //////breakfast
  $('.addBreakfast').on('click',function(){
      addBreakfast();
  });

  function addBreakfast()
  {
    var tr= '<tr>'+
              '<td>'+
                '<select name="menuBreakfast[]" class="form-control" required="required">'+
                '<option value="" selected disabled hidden>Select Item</option>'+
                  '@foreach($breakfast as $row)'+
                     '<option value="{{$row->id}}"> {{$row->item}} </option>'+
                  '@endforeach'+
                '</select>'+
              '</td>'+
               '<td style="text-align: center;"><a href="#" class="btn btn-danger removeBreakfast">-</a>'+
              '</td>'+
            '</tr>'

    $('.breakfast_box').append(tr);
  }

  $('tbody').on('click','.removeBreakfast', function(){
      $(this).parent().parent().remove();
  });




///////lunch

  $('.addLunch').on('click',function(){
      addLunch();
  });

  function addLunch()
  {
    var tr= '<tr>'+
              '<td>'+
                '<select name="menuLunch[]" class="form-control" required="required">'+
                '<option value="" selected disabled hidden>Select Item</option>'+
                  '@foreach($lunch as $row)'+
                     '<option value="{{$row->id}}"> {{$row->item}} </option>'+
                  '@endforeach'+
                '</select>'+
              '</td>'+
               '<td style="text-align: center;"><a href="#" class="btn btn-danger removeLunch">-</a>'+
              '</td>'+
            '</tr>'

    $('.lunch_box').append(tr);
  }

  $('tbody').on('click','.removeLunch', function(){
      $(this).parent().parent().remove();
  });

////////dinner

  $('.addDinner').on('click',function(){
      addDinner();
  });

  function addDinner()
  {
    var tr= '<tr>'+
              '<td>'+
                '<select name="menuDinner[]" class="form-control" required="required">'+
                '<option value="" selected disabled hidden>Select Item</option>'+
                  '@foreach($dinner as $row)'+
                     '<option value="{{$row->id}}"> {{$row->item}} </option>'+
                  '@endforeach'+
                '</select>'+
              '</td>'+
               '<td style="text-align: center;"><a href="#" class="btn btn-danger removeDinner">-</a>'+
              '</td>'+
            '</tr>'

    $('.dinner_box').append(tr);
  }

  $('tbody').on('click','.removeDinner', function(){
      $(this).parent().parent().remove();
  });
</script>

@endsection