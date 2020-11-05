@extends('layouts.app')

@section('title', 'Reset Password')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <div class="card" style="padding:15px">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="mt-4 text-center">
                    @if (session('status'))
                        <a-alert message="{{ session('status') }}" type="success" show-icon />
                    @endif
                    <div class="mt-3 inputbox">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                              <i class="fa fa-envelope">
                            </i>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </strong>
                </span>
             
                        </input>
                    </div>
                   
                </div>
               
                <div class="mt-2">
                    <button class="btn btn-primary btn-block" type="submit">
                        Send Password Reset Link
                    </button>
                </div>
                <br>
               
            </div>
    
        </div>
    </form>
</div>
</div>
</div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
