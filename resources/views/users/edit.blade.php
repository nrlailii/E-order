@extends('layouts.app')
@section('title', 'Edit Pengguna | E-Order')
@section('content')
<div class="card">
    <h1>Edit Pengguna</h1>
    @include('users._form', ['user' => $user, 'action' => route('users.update', $user), 'method' => 'PUT'])
</div>
@endsection
