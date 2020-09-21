@extends('layouts.auth')

@section('content')
  

        <div class="login-page img-fluid">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="outer-box">
                 <div class="box">
                        <div class="form-head">
                              <h2>Login</h2>
                        </div>
                        <div class="form-body">
                              <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 


                              <input id="password" type="password" placeholder="Pasword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                        </div>
                        <div class="form-footer">
                              <button type="submit">Sign In</button>
                               @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                 </div>
                </div>
            </form>
       </div>
    
@endsection
