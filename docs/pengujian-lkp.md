# Dokumentasi Hasil Pengujian — LKP Pertemuan 5

Isi kolom hasil setelah aplikasi benar-benar dijalankan. Jangan menandai Berhasil tanpa pengujian aktual.

| No. | Skenario | Hasil yang diharapkan | Hasil aktual |
|---:|---|---|---|
| 1 | Login admin | Masuk dan diarahkan ke dashboard | Belum diuji |
| 2 | Login petugas | Masuk ke dashboard dan role terdeteksi | Belum diuji |
| 3 | Login pelanggan | Masuk ke dashboard dan role terdeteksi | Belum diuji |
| 4 | Email/password salah | Login ditolak dengan pesan validasi | Belum diuji |
| 5 | Petugas membuka `/users` | Ditolak dengan HTTP 403 | Belum diuji |
| 6 | Pelanggan membuka `/users` | Ditolak dengan HTTP 403 | Belum diuji |
| 7 | Admin menambah pengguna | Data tersimpan dengan password ter-hash | Belum diuji |
| 8 | Admin mengedit pengguna | Perubahan data tersimpan | Belum diuji |
| 9 | Admin menghapus pengguna lain | Data terhapus | Belum diuji |
| 10 | Admin menghapus akun sendiri | Penghapusan ditolak | Belum diuji |
| 11 | Logout | Session diakhiri dan kembali ke login | Belum diuji |

## Screenshot yang perlu dikumpulkan
- `screenshots/login_admin.png`
- `screenshots/dashboard_admin.png`
- `screenshots/dashboard_petugas.png`
- `screenshots/dashboard_pelanggan.png`
- `screenshots/user_list.png`
- `screenshots/user_create.png`
- `screenshots/user_edit.png`
- `screenshots/user_delete.png` (konfirmasi/pesan hasil)

Screenshot harus diambil dari aplikasi yang benar-benar berjalan dan tidak boleh dibuat seolah-olah pengujian sudah berhasil jika belum diuji.
