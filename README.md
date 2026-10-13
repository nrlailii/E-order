# E-Order — Login Multi-Role & Management Pengguna

Starter source code untuk mengimplementasikan hasil LKP Pertemuan 5:
- Login dan logout
- Role `admin`, `petugas`, `pelanggan`
- Redirect ke dashboard berdasarkan role
- Middleware pembatasan akses
- CRUD pengguna (khusus admin)
- Migration dan seeder akun demo

## Prasyarat
- PHP sesuai kebutuhan Laravel 12
- Composer
- MySQL/MariaDB
- Project Laravel 12 yang sudah dibuat

> Paket ini adalah kumpulan file implementasi untuk ditempelkan ke project Laravel, bukan instalasi Laravel lengkap. Folder `vendor/` dan file inti framework tidak disertakan.

## 1. Pasang ke project Laravel
Ekstrak ZIP, lalu salin folder `app`, `database`, `resources`, dan `routes` ke root project Laravel Anda. Periksa konflik file sebelum memilih replace/merge, terutama `routes/web.php` dan `app/Models/User.php`.

## 2. Atur database
Buat database, lalu sesuaikan `.env` pada project Laravel:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eorder
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Pastikan kolom role tersedia
Migration `add_role_to_users_table` menambahkan kolom `role`. Jika tabel `users` Anda sudah memiliki kolom `role`, jangan jalankan migration ini sebelum menyesuaikannya.

## 4. Jalankan migration dan seeder
```bash
php artisan migrate
php artisan db:seed --class=EOrderUserSeeder
```

Akun demo:
- Admin: `admin@eorder.test` / `Password123!`
- Petugas: `petugas@eorder.test` / `Password123!`
- Pelanggan: `pelanggan@eorder.test` / `Password123!`

Ganti password demo sebelum aplikasi dipakai sungguhan.

## 5. Jalankan aplikasi
```bash
php artisan serve
```
Buka `http://127.0.0.1:8000/login`.

## 6. Catatan implementasi
- Route `/users` hanya dapat diakses oleh admin.
- Dashboard tersedia di `/dashboard`.
- Admin dapat melihat, menambah, mengubah, dan menghapus pengguna.
- Jangan menghapus akun admin yang sedang digunakan.
- Validasi role dilakukan pada server melalui middleware, bukan hanya menyembunyikan menu.
- Untuk deployment, tambahkan rate limiting login, verifikasi email, reset password, CSRF tetap aktif, dan konfigurasi HTTPS.

## 7. Upload ke GitHub
Di root project Laravel:
```bash
git init
git add .
git commit -m "Implement login multi-role and user management"
git branch -M main
git remote add origin https://github.com/USERNAME/NAMA-REPOSITORY.git
git push -u origin main
```
Ganti URL remote dengan repository milik kelompok. Jangan commit `.env`, password asli, atau file rahasia.
