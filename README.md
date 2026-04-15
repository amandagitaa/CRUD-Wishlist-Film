# Wishlist Film (Laravel CRUD)

## Deskripsi
Aplikasi Wishlist Film adalah aplikasi web sederhana berbasis Laravel untuk mengelola daftar film yang ingin ditonton. Aplikasi ini menerapkan konsep CRUD (Create, Read, Update, Delete) yang terhubung dengan database MySQL, dengan data berupa judul, genre, tahun rilis, dan deskripsi film.

Project ini dibuat sebagai latihan untuk memahami dasar Laravel seperti routing, controller, model, migration, dan Blade, serta cara menghubungkan aplikasi dengan database dan mengelola data secara dinamis.

---

## Tujuan
- Memahami konsep dasar CRUD pada Laravel
- Mempelajari struktur MVC (Model, View, Controller)
- Melatih koneksi Laravel dengan database MySQL
- Mengimplementasikan routing
- Membuat aplikasi web sederhana yang fungsional

---

## Teknologi
- Laravel 13 (Framework PHP)
- PHP 8.3
- MySQL (Database)
- Laragon

---

## Fitur
- Menambah data film
- Menampilkan daftar film
- Mengedit data film
- Menghapus data film
- Menyimpan data ke database MySQL

---

## Cara Menjalankan Project
1. Buka aplikasi di browser: http://127.0.0.1:8000/films
2. Klik tombol **Tambah Film** untuk menambahkan data baru
3. Isi form:
    - Judul film
    - Genre
    - Tahun rilis
    - Deskripsi
4. Klik **Simpan**
5. Data akan muncul di halaman utama
6. Gunakan tombol:
    - **Edit** untuk mengubah data
    - **Hapus** untuk menghapus data

---

## Struktur Database

Tabel: `films`

- id (Primary Key)
- judul (string)
- genre (string)
- tahun (year)
- deskripsi (text)
- created_at (timestamp)
- updated_at (timestamp)

---

## Struktur Halaman

- `/films` → Menampilkan daftar film
- `/films/create` → Form tambah film
- `/films/{id}/edit` → Form edit film
- `/films/{id}` (DELETE) → Menghapus data film

---

## Author

- Nama    : Amanda Gita Syafitri
- Kelas   : A3