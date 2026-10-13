@extends('layouts.app')
@section('title', 'Tambah Pengguna | E-Order')
@section('content')
<div class="card">
    <h1>Tambah Pengguna</h1>
    @include('users._form', ['user' => null, 'action' => route('users.store'), 'method' => 'POST'])
</div>
@endsection
