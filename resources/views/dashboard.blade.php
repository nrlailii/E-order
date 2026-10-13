@extends('layouts.app')
@section('title', 'Dashboard | E-Order')
@section('content')
<div class="card">
    <h1>Dashboard {{ ucfirst(auth()->user()->role) }}</h1>
    <p>Selamat datang, <strong>{{ auth()->user()->name }}</strong>.</p>
    @switch(auth()->user()->role)
        @case('admin')
            <p>Anda dapat mengelola pengguna dan memantau sistem E-Order.</p>
            <a class="btn" href="{{ route('users.index') }}">Buka Management Pengguna</a>
            @break
        @case('petugas')
            <p>Dashboard petugas. Modul operasional pesanan dapat ditambahkan pada tahap pengembangan berikutnya.</p>
            @break
        @default
            <p>Dashboard pelanggan. Katalog dan pemesanan produk dapat ditambahkan pada tahap berikutnya.</p>
    @endswitch
</div>
@endsection
