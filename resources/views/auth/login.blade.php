@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="ui grid">
                    <div class="row">
                        <div class="five wide column "></div>
                            <div class=" ui six wide column fluid card" style="padding : 15px;">
                                <h1>Login</h1>
                                <br>
                                <form class="ui form form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="field">
                                            <label>E-Mail Address</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="field">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <br>
                                    
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="ui button">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <div class="five wide column"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


