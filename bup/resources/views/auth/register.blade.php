@extends('layouts.auth')
@section('content')
<div class="login-page img-fluid">
    <div style="width: 450px;  background: #060c21; z-index: 9;" class="card   ">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 style="color: wheat;    font-family: 'Fira Sans Condensed', sans-serif;   line-height: 1.8; margin-bottom: 30px; text-transform: uppercase; margin-bottom: 30px;">Registration form</h2>
                <div class="rad">
                    <p   >Select User Role:</p>
                    <label  style="  left: 30%;  transform: translateX(-30%);" >
                        <input type="radio" name="is_admin" value=0 checked>
                        <span class="yes">Student</span>
                    </label>
                    <label style="  left: 33%;  transform: translateX(-33%);" >
                        <input type="radio" name="is_admin" value=1>
                        <span class="yes">Admin</span>
                    </label>
                </div>
                <div class="clear"></div>
                <div class="form-group-1">
                    <div class="form-body">
                        <input type="number"  placeholder="User ID" name="roll" required />
                        <input type="text"  placeholder="Your Name" name="name" required />
                        <input type="text"   placeholder="Department" name="dept" required />
                        <input type="text"   placeholder="Batch" name="batch" required />
                        <input type="email"   placeholder="Email" name="email"required />
                        <input type="number"   placeholder="Phone number" name="phone" required />
                    </div>
                </div>
                <div class="form-footer-mail">
                    <button class="btn btn-block btn-dark" style="text-align: center;font-size: 15px;" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
function myFunction() {
var x = document.getElementById("roll");
alert("Are you sure that you are changing the user?");
}
</script>