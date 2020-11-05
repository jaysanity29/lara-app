@extends('layouts.app')

@section('title', 'Login or Sign Up')
@section('content')
<!-- Outer Row -->
  <img src="./img/cce.png" width="190px" style="margin-bottom: -30px;z-index:-1;margin-left: 20%">
<div class="container">
    <div class="row">
   
    <form action="{{ route('login') }}" method="POST">

        @csrf
        <div class="col-md-8 form-group">
            <div class="card" style="padding:30px;">

                <div class="mt-4 text-center">
                    <h5>
                        Log in to your account
                    </h5>
                    <span>
                        Login with your credentials
                    </span>
                    <div class="mt-3">
                         <a-input class="form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" type="email" value="{{ old('email') }}" required placeholder="Email">
                            <a-icon slot="prefix" type="user" style="color:rgba(0,0,0,.25)" />
                        </a-input>
                         @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>
                        {{ $errors->first('email') }}
                    </strong>
                </span>
                @endif
                    </div>
                </div>
                <div class="mt-3">
                    <a-input-password name="password" placeholder="Password" required/>
                    <a-icon slot="prefix" type="lock" style="color:rgba(0,0,0,.25)" />
                     </a-input>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input " id="flexCheckDefault" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Keep me Logged in
                            </label>
                        </input>
                    </div>
                    <div>
                        <a class="forgot" href="/password/reset">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <br>
                <div class="mt-2">
                    <button class="btn btn-danger btn-block" type="submit">
                        Log In
                    </button>
                </div>
                <br>
                <div class="text-center intro">
                    <span class="d-block account">
                         Don't have an account?
                    </span>
                  <a href="{{ route('register')}}">
                    <span class="d-block account">
                       Sign up here.
                    </span>
                  </a>
                  <br>
                    <span class="contact">
                        Upon creating your account you have to wait for the administrator to approved your account.
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<style>
.container {
    justify-content: center;
}
.account {
    font-weight: 500;
    font-size: 17px
}

.contact {
    font-size: 13px
}

.form-control {
    text-indent: 14px
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #4a148c;
    outline: 0;
    box-shadow: none
}

.inputbox {
    margin-bottom: 10px;
    position: relative
}

.inputbox i {
    position: absolute;
    left: 8px;
    top: 12px;
    color: #dadada
}

.form-check-label {
    font-size: 13px
}

.form-check-input {
    width: 14px;
    height: 15px;
    margin-top: 5px
}

.forgot {
    font-size: 14px;
    text-decoration: none;
    color: #4A148C
}

.mail {
    color: #4a148c;
    text-decoration: none
}

.form-check {
    cursor: pointer
}

.btn-primary {
    color: #fff;
    background-color: #4A148C;
    border-color: #4A148C
}
</style>
@endsection
