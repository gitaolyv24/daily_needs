# 📌 Daily Needs – Dokumentasi Progres Proyek

## 📖 Deskripsi Proyek

**Daily Needs** adalah aplikasi manajemen kebutuhan harian berbasis web yang dikembangkan menggunakan **Laravel 12**. Aplikasi ini bertujuan membantu pengguna mencatat kebutuhan belanja secara terstruktur, memberikan label prioritas, serta memantau daftar kebutuhan agar lebih efisien dan terorganisir.

Aplikasi ini dibuat sebagai **proyek pembelajaran dan pengembangan portofolio** dalam bidang pengembangan web dan sistem informasi.

---

## 🎯 Tujuan Proyek

* Memudahkan pencatatan kebutuhan harian.
* Mengelompokkan kebutuhan berdasarkan prioritas.
* Melatih penerapan framework Laravel dalam pengembangan aplikasi nyata.
* Menerapkan konsep CRUD, autentikasi, dan manajemen database.

---

## 🧰 Teknologi yang Digunakan

* **Backend** : Laravel 12
* **Frontend** : Blade Template, HTML, CSS, Bootstrap
* **Database** : MySQL / MariaDB
* **Tools** : Git, GitHub, Visual Studio Code, Composer

---

## 📂 Struktur Folder Utama

```
daily_needs/
├── app/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
├── .env
└── composer.json
```

---

## ⚙️ Fitur Aplikasi

* Autentikasi pengguna (Login & Register)
* Manajemen kebutuhan harian (Tambah, Lihat, Edit, Hapus)
* Label prioritas kebutuhan (Rendah, Sedang, Tinggi)
* Checklist kebutuhan
* Riwayat kebutuhan

---

## 📌 Progress Pengembangan

### Tahap 1 – Inisialisasi Proyek

* [x] Instalasi Laravel 12
      ![Uploading image.png…]()

* [x] Konfigurasi environment (.env)
* [x] Setup database
* [x] Push repository ke GitHub

### Tahap 2 – Desain Database

* [x] Perancangan ERD
* [x] Pembuatan migration tabel users
* [x] Pembuatan migration tabel needs

### Tahap 3 – Backend Development

* [x] CRUD kebutuhan
* [x] Controller kebutuhan
* [x] Validasi input
* [x] Routing aplikasi

### Tahap 4 – Frontend Development

* [x] Halaman login & register
* [x] Dashboard utama
* [x] Form tambah kebutuhan
* [x] Tampilan list kebutuhan

### Tahap 5 – Testing & Debugging

* [ ] Pengujian semua fitur
* [ ] Perbaikan bug
* [ ] Optimalisasi UI

---

## 🗃️ Struktur Database

### Tabel `needs`

| Field       | Tipe      | Keterangan               |
| ----------- | --------- | ------------------------ |
| id          | bigint    | Primary key              |
| user_id     | bigint    | Relasi user              |
| nama_barang | varchar   | Nama kebutuhan           |
| prioritas   | enum      | rendah / sedang / tinggi |
| status      | boolean   | Selesai / belum          |
| created_at  | timestamp | Waktu input              |
| updated_at  | timestamp | Waktu update             |

---

## 🚀 Cara Menjalankan Proyek

1. Clone repository

```bash
git clone https://github.com/gitaolyv24/daily_needs.git
```

2. Masuk folder project

```bash
cd daily_needs
```

3. Install dependency

```bash
composer install
```

4. Copy file environment

```bash
cp .env.example .env
```

5. Generate key

```bash
php artisan key:generate
```

6. Konfigurasi database di file `.env`

7. Migrasi database

```bash
php artisan migrate
```

8. Jalankan server

```bash
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000
```

---

## 📸 Dokumentasi Screenshot

*(Tambahkan screenshot halaman login, dashboard, dan fitur utama di sini)*

---

## 📈 Rencana Pengembangan Selanjutnya

* Fitur reminder kebutuhan
* Export data ke PDF / Excel
* Grafik statistik belanja
* Notifikasi kebutuhan prioritas tinggi

---

## 👩‍💻 Developer

**Gita Olivia**
GitHub: [https://github.com/gitaolyv24](https://github.com/gitaolyv24)

---

## 📜 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan tidak digunakan untuk tujuan komersial.
