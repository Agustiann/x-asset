@extends('layouts.app')

@section('custom-header')
<header>
    <a href="/" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </a>
    <div class="right-content">
        <a href="/" class="nav-btn">Cancel</a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>
@endsection

@section('content')
<section class="asset-section">
    <div class="login-container">
        <div class="login-img">
            <img src="{{ asset('img/login-logo.png') }}" alt="">
            <p><span>X</span>-Code Assets</p>
        </div>
        <div class="form-login">
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username">
                    <div class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password">
                    <div class="error-message"></div>
                </div>
                <button type="submit" class="login-btn">Sign In</button>
            </form>
        </div>
    </div>
</section>
@endsection
