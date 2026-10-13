@if($errors->any())
    <div class="error"><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<form method="POST" action="{{ $action }}">
    @csrf
    @if($method !== 'POST') @method($method) @endif
    <div class="field"><label for="name">Nama</label><input id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required maxlength="100"></div>
    <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" value="{{ old('email', $user->email ?? '') }}" required></div>
    <div class="field"><label for="role">Role</label>
        <select id="role" name="role" required>
            @foreach(['admin' => 'Admin', 'petugas' => 'Petugas', 'pelanggan' => 'Pelanggan'] as $value => $label)
                <option value="{{ $value }}" @selected(old('role', $user->role ?? 'pelanggan') === $value)>{{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="field"><label for="password">Password {{ $user ? '(kosongkan jika tidak diubah)' : '' }}</label><input id="password" name="password" type="password" {{ $user ? '' : 'required' }} minlength="8"></div>
    <div class="field"><label for="password_confirmation">Konfirmasi Password</label><input id="password_confirmation" name="password_confirmation" type="password" {{ $user ? '' : 'required' }} minlength="8"></div>
    <button class="btn" type="submit">Simpan</button>
    <a href="{{ route('users.index') }}">Batal</a>
</form>
