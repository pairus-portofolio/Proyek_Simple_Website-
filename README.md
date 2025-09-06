# Proyek_Simple_Website-
---
## Pendahuluan

Repository ini berisi hasil belajar saya dalam pemrograman PHP. Ada dua bagian besar yang saya kerjakan: latihan dasar menggunakan PHP murni tanpa framework, dan project CRUD Mahasiswa menggunakan **CodeIgniter 4**. Keduanya saya satukan dalam satu repository agar terlihat perjalanan belajar saya, mulai dari konsep sederhana sampai ke penggunaan framework berbasis MVC.

---

## Latihan PHP Dasar

Pada tahap awal, saya menulis beberapa file PHP sederhana untuk memahami logika dasar pemrograman:

* **`berurutan.php`** → menampilkan angka berurutan dengan perulangan sederhana.
* **`tabelloop.php`** → latihan membuat tabel HTML dengan perulangan, sehingga tabel bisa otomatis bertambah baris sesuai logika loop.
* Beberapa file lain berfungsi untuk melatih penggunaan array, input form sederhana, dan pengolahan data dasar.

Latihan ini memang terlihat sederhana, namun sangat membantu saya untuk memahami bagaimana PHP bekerja, bagaimana server mengolah input dari form, serta bagaimana hasilnya ditampilkan di browser.

---

## CRUD Mahasiswa dengan CodeIgniter 4

Setelah latihan dasar, saya melanjutkan dengan membangun aplikasi **CRUD Mahasiswa**. Aplikasi ini terdiri dari:

* **Model (`MahasiswaModel.php`)** → menangani akses database MySQL.
* **Controller (`Mahasiswa.php`)** → mengatur logika aplikasi, seperti menampilkan daftar mahasiswa, menambah, mengedit, dan menghapus data.
* **View (`index.php`, `create.php`, `edit.php`)** → bagian tampilan untuk pengguna.

Fitur utama aplikasi:

* Menambahkan data mahasiswa dengan field `nim`, `nama_lengkap`, `jenis_kelamin`, dan `tanggal_lahir`.
* Menampilkan daftar mahasiswa dalam tabel.
* Mengedit dan menghapus data.
* Validasi sederhana: NIM tidak boleh duplikat dan harus diisi dengan benar.
* Konfirmasi saat menghapus data agar tidak terjadi kesalahan.

Dengan CodeIgniter 4, struktur kode lebih rapi, setiap bagian punya tugas masing-masing, sehingga mudah dipelajari kembali dan dikembangkan lebih jauh.

---

## Instalasi & Penggunaan

1. Clone repository ini.
2. Install dependency dengan Composer.
3. Atur konfigurasi database di file `.env`.
4. Buat tabel `biodata_mahasiswa` di MySQL dengan field:

   * `nim` (primary key)
   * `nama_lengkap`
   * `jenis_kelamin`
   * `tanggal_lahir`
5. Jalankan server dengan perintah:

   ```bash
   php spark serve
   ```
6. Akses aplikasi melalui browser di `http://localhost:8080/mahasiswa`.
---

