# 📌 Daily Needs – Dokumentasi Progres Proyek

## 📖 Deskripsi Proyek

**Daily Needs** adalah aplikasi manajemen kebutuhan harian berbasis web yang dikembangkan menggunakan **Laravel 12**.  
Aplikasi ini membantu pengguna mencatat kebutuhan belanja secara terstruktur, memberikan label prioritas, memantau daftar kebutuhan, serta mengarsipkan item yang sudah selesai.

Proyek ini dibuat sebagai **proyek pembelajaran dan portofolio** dalam bidang pengembangan web dan sistem informasi.

---

## 🎯 Tujuan Proyek

- Memudahkan pencatatan kebutuhan harian.  
- Mengelompokkan kebutuhan berdasarkan prioritas (Rendah, Sedang, Tinggi).  
- Melatih kemampuan penggunaan Laravel 12, konsep CRUD, dan manajemen database.  
- Menyediakan arsip kebutuhan agar data tetap tertata.  

---

## 🧰 Teknologi yang Digunakan

- **Backend:** Laravel 12  
- **Frontend:** Blade Template, HTML, CSS, Bootstrap  
- **Database:** MySQL / MariaDB  
- **Tools:** Git, GitHub, Visual Studio Code, Composer  

---

## 📂 Struktur Folder Utama


```
daily_needs/
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env
└── composer.json

```


---

## ⚙️ Fitur Aplikasi

- CRUD kebutuhan harian (Tambah, Lihat, Edit, Hapus)  
- Label prioritas kebutuhan (Rendah / Sedang / Tinggi)  
- Checklist kebutuhan (Belum dibeli / Sudah dibeli)  
- Arsip barang dan tombol Pulihkan  
- Riwayat kebutuhan  

---

## 📝 User Stories

1. **Sebagai pengguna**, saya ingin menambahkan kebutuhan baru sehingga saya dapat mencatat barang yang dibutuhkan.  
2. **Sebagai pengguna**, saya ingin melihat daftar kebutuhan dengan prioritas dan status sehingga bisa mengatur belanjaan.  
3. **Sebagai pengguna**, saya ingin menandai barang yang sudah dibeli agar bisa fokus ke barang lain.  
4. **Sebagai pengguna**, saya ingin mengarsipkan barang yang sudah dibeli agar dashboard tetap rapi.  
5. **Sebagai pengguna**, saya ingin memulihkan barang dari arsip jika ingin membelinya lagi.  

---

## 🗂️ SRS Singkat (Software Requirement Specification)

### Functional Requirements
- FR1: Tambah kebutuhan baru dengan nama barang, jumlah, prioritas, dan tanggal kebutuhan.  
- FR2: Lihat daftar kebutuhan, urut berdasarkan prioritas dan tanggal.  
- FR3: Tandai kebutuhan sebagai sudah dibeli.  
- FR4: Arsipkan kebutuhan yang selesai.  
- FR5: Pulihkan kebutuhan dari arsip.  
- FR6: Hapus kebutuhan.  

### Non-Functional Requirements
- NFR1: Responsif pada desktop dan mobile.  
- NFR2: Validasi input data sebelum disimpan.  
- NFR3: Database aman dan konsisten.  
- NFR4: Waktu respon cepat (<1 detik untuk operasi CRUD sederhana).  

---

## 📊 Diagram Use Case

```text
          +------------------+
          |       User       |
          +------------------+
             |    |    | 
     --------+    |    +-------------
     |             |                  |
  Dashboard     Tambah            Lihat
                  |                |
           +-------------+-------------------+
           |             |                   |
        Update        Hapus               Arsip
           |                                |
        Tandai                               Pulihkan


---

##  🔄 Struktur Logika MVC & Alur Data

User --> Routes --> Controller --> Model --> Database
         ^          |
         |          v
         |       View (Blade)
         |
     HTTP Request

