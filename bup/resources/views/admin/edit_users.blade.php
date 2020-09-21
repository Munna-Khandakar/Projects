@extends('layouts.auth')
@section('content')
<div class="login-page img-fluid">
    <div style="width: 450px;  background: #060c21; z-index: 9;" class="card   ">
        <div class="card-body">
            <form method="POST" action="{{ route('update_user') }}">
                @csrf
                <h2 style="color: wheat;    font-family: 'Fira Sans Condensed', sans-serif;   line-height: 1.8; margin-bottom: 30px; text-transform: uppercase; margin-bottom: 30px;">Registration form</h2>
                <div class="rad">
                    <p   >Select User Role:</p>
                    <label  style="  left: 30%;  transform: translateX(-30%);" >
                        <input type="radio" name="is_admin" value=0 @if($user->is_admin==0)checked @endif >
                        <span class="yes">Student</span>
                    </label>
                    <label style="  left: 33%;  transform: translateX(-33%);" >
                        <input type="radio" name="is_admin" value=1 @if($user->is_admin==1)checked @endif>
                        <span class="yes">Admin</span>
                    </label>
                </div>
                <div class="clear"></div>
                <div class="form-group-1">
                    <div class="form-body">
                        <input type="hidden" value="{{$user->id}}" name="id" required />
                        <input type="number"  value="{{$user->roll}}" name="roll" required />
                        <input type="text" value="{{$user->name}}" name="name" required />
                        <input type="text" value="{{$user->dept}}" name="dept" required />
                        <input type="text" value="{{$user->batch}}" name="batch" required />
                        <input type="email" value="{{$user->email}}" name="email"required />
                        <input type="number" value="0{{$user->phone}}" name="phone" required />
                    </div>
                </div>
                <div class="form-footer-mail">
                    <button class="btn btn-block btn-dark" style="text-align: center;font-size: 15px;" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>