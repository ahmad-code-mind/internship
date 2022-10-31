@extends('layout.app')


@section('content')
<div class="container">
    <div class="row">
        @if (Session::has('msg'))
        <div class="alert alert-success">{{Session::get('msg')}}</div>
        @endif
        @if (Session::has('msgLoginFaild'))
        <div class="alert alert-danger">{{Session::get('msgLoginFaild')}}</div>
        @endif
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                LOGIN FORM
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="POST" action="{{ route('login.users') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">EMAIL</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control" name="password" required
                                autocomplete="new-password">
                        </div>

                        <div class="loginbttm">
                            <div class="col-lg-12 text-center login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                            <div class="col-lg-12 form-group text-white">
                                <div class="topCushion">Have an Account? <a href="{{'/register'}}">Register</a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>

    @endsection