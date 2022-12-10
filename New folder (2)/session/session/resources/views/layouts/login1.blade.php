@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       required>
            </div>
            @if (Session::has('not-login'))
                <div class="not-login">
                    <p class="text-danger">{{ Session::get('not-login') }}</p>
                </div>
            @endif 
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
@endsection