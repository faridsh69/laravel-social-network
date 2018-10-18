@extends('layout.master')
@section('container')
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <h3 class="text-center">
        ثبت نام 
        </h3> 
        <div class="seperate"></div>
         <div class="panel panel-default">
        <div class="panel-body">
        <form method="post" action='/user/register'>
            {{ csrf_field() }}
            @if ($errors->all())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="first_name">نام:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', '') }}">
            </div>
            <div class="form-group">
                <label for="last_name">نام خانوادگی:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', '') }}">
            </div>
             <div class="form-group">
                <label for="national_security_number">کد ملی:</label>
                <input type="text" class="form-control" id="national_security_number" name="national_security_number" value="{{ old('national_security_number', '') }}">
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="email" class="form-control ltr" id="email" name="email" value="{{ old('email', '') }}">
            </div>
            <div class="form-group">
                <label for="cellphone">شماره تماس:</label>
                <input type="text" class="form-control" id="cellphone" name="cellphone" value="{{ old('cellphone', '') }}">
            </div>
            <div class="form-group">
                <label for="username">نام کاربری:</label>
                <input type="text" class="form-control ltr" id="username" name="username" value="{{ old('username', '') }}">
            </div>
            <div class="form-group">
                <label for="password">رمز عبور:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation" ">تکرار رمز عبور:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary btn-block">ثبت نام</button>
        </form>
        </div>  
        </div>
    </div>
</div>
@endsection