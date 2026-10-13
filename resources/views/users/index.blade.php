@extends('layouts.app')
@section('title', 'Management Pengguna | E-Order')
@section('content')
<div class="card">
    <h1>Management Pengguna</h1>
    <p>Kelola akun dan role pengguna E-Order.</p>
    <a class="btn" href="{{ route('users.create') }}">+ Tambah Pengguna</a>
    <div style="overflow-x:auto;margin-top:18px">
    <table>
        <thead><tr><th>Nama</th><th>Email</th><th>Role</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ ucfirst($user->role) }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}">Edit</a>
                    <form style="display:inline" method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">Belum ada data pengguna.</td></tr>
        @endforelse
        </tbody>
    </table>
    </div>
    <div style="margin-top:16px">{{ $users->links() }}</div>
</div>
@endsection
