@extends('layouts.app')

@section('title', 'Register account')
@section('content')
<div class="container">
     <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                
    <a-tabs default-active-key="1" style="text-align:center;font-weight: 500;">
        <a-tab-pane key="1" tab="Student">
                
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h4>
                            Student Account
                        </h4>
                        <span>
                            Please fill up the required filled.
                        </span>
                        <div class="mt-3 inputbox">
                            <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" required type="text" value="{{ old('name') }}">
                                <i class="fa fa-user">
                                </i>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $errors->first('name') }}
                                    </strong>
                                </span>
                                @endif
                            </input>
                        </div>
                        <div class="mt-3 inputbox">
                            <input autofocus="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required="" type="email" value="{{ old('email') }}">
                                <i class="fa fa-envelope">
                                </i>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $errors->first('email') }}
                                    </strong>
                                </span>
                                @endif
                            </input>
                        </div>
                        <div class="mt-3 inputbox">
                            <input autofocus="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required="" type="password">
                                <i class="fa fa-key">
                                </i>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $errors->first('password') }}
                                    </strong>
                                </span>
                                @endif
                            </input>
                        </div>
                        <div class="mt-3 inputbox">
                            <input class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" required="" type="password">
                                <i class="fa fa-key">
                                </i>
                            </input>
                        </div>
                        <input name="type" type="hidden" value="2">
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Sign up
                                </button>
                            </div>
                        </input>
                    
                </form>
            </div>
        </a-tab-pane>
    
<a-tab-pane key="2" tab="Research Personnel">
    <div class="col-md-12" style="padding:15px">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <h4>
                    Research Personnel Account
                </h4>
                <span>
                    Please fill up the required filled.
                </span>
                <div class="mt-3 inputbox">
                    <input class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" placeholder="Name" required="" type="text" value="{{ old('name') }}">
                        <i class="fa fa-user">
                        </i>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $errors->first('name') }}
                            </strong>
                        </span>
                        @endif
                    </input>
                </div>
                <div class="mt-3 inputbox">
                    <input class="form-control form-control-user{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" placeholder="Email" required="" type="email" value="{{ old('email') }}">
                        <i class="fa fa-user">
                        </i>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $errors->first('email') }}
                            </strong>
                        </span>
                        @endif
                    </input>
                </div>
                <div class="mt-3 inputbox">
                    <input class="form-control form-control-user{{ $errors->has('expertises') ? ' is-invalid' : '' }} " name="expertises" placeholder="Field of Expertise" required="" type="text" value="{{ old('expertises') }}">
                        <i class="fa fa-user">
                        </i>
                        @if ($errors->has('expertises'))
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $errors->first('expertises') }}
                            </strong>
                        </span>
                        @endif
                    </input>
                </div>
                <div class="mt-3">
                    <select class="form-control form-control-sm">
                        <option>
                            Small select
                        </option>
                    </select>
                </div>
                <div class="mt-3 inputbox">
                    <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                    </input>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary btn-block" type="submit">
                        Sign up
                    </button>
                </div>
            </div>
            @csrf
        </form>
    </div>
</a-tab-pane>
</a-tabs>
</div>
</div>
</div>

@endsection
