@extends('layouts.app')
@section('title', 'Login | E-Order')
@section('content')
<div class="card" style="max-width:440px;margin:45px auto">
    <h1>Login E-Order</h1>
    <p>Masuk menggunakan akun yang sudah terdaftar.</p>
    @if($errors->any())<div class="error">{{ $errors->first() }}</div>@endif
    <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus></div>
        <div class="field"><label for="password">Password</label><input id="password" name="password" type="password" required></div>
        <div class="field"><label><input style="width:auto" type="checkbox" name="remember" value="1"> Ingat saya</label></div>
        <button class="btn" type="submit">Login</button>
    </form>
</div>
@endsection
