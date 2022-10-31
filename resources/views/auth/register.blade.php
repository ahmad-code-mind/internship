@extends('layout.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                REGISTER FORM
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="POST" action="{{ route('register.users') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">NAME</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required
                                autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">EMAIL</label>
                            <input type="email" class="form-control" name="email" required autocomplete="email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control" name="password" required
                                autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">CONFIRM PASSWORD</label>
                            <input type="password" class="form-control" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>

                        <div class="loginbttm">
                            <div class="col-lg-12 text-center login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">REGISTER</button>
                            </div>
                            <div class="col-lg-12 form-group text-white">
                                <div class="topCushion">Already a member? <a href="{{ route('login')}}">Login</a></div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>


    @endsection