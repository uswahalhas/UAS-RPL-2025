# System Booking for Sport Facilities with Login Management

## 📌 Deskripsi Proyek

Ini adalah proyek **UAS Rekayasa Perangkat Lunak 2025**, hasil pengembangan dari project **UTS** sebelumnya. Aplikasi ini merupakan sistem pemesanan fasilitas olahraga yang telah dilengkapi dengan fitur **Login Management** untuk tiga jenis pengguna:

- 👤 Super Admin  
- 🛠️ Admin  
- 👥 User  

Setiap jenis pengguna memiliki hak akses dan kontrol yang berbeda terhadap sistem.

---

## 💻 Fitur Utama

- ✅ Register & Login  
- 🔐 Manajemen Hak Akses Berdasarkan Role  
- 📅 Booking Fasilitas Olahraga  
- 📄 Riwayat Pemesanan  
- 🧩 Validasi Form dan Middleware Akses  
- 🔧 CRUD Data Fasilitas  
- 🧑‍🤝‍🧑 Manajemen Pengguna (khusus Super Admin/Admin)  

---

## ⚙️ Teknologi yang Digunakan

- **Laravel 10**  
- **MySQL** (XAMPP)  
- **Blade Template Engine**  
- **PHP 8.2**  
- **Composer**

---

## 🗂️ Struktur Folder Penting
app/

Http/

Controllers/

Middleware/

database/

migrations/

seeders/

resources/

views/

routes/

web.php

.env

README.md


---

## 🧪 Cara Menjalankan Proyek (Localhost)

1. Clone atau pindahkan folder ke dalam direktori `htdocs` XAMPP.  
2. Jalankan XAMPP (Apache & MySQL).  
3. Buat database baru di **phpMyAdmin** sesuai nama di file `.env`  
   > Default: `uas_rpl_management_login`  
4. Jalankan perintah berikut di terminal:

`bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve

🧑‍💼 Role Akses
Role	Fitur Utama yang Bisa Diakses
Super Admin	Semua fitur & manajemen admin
Admin	Kelola booking & user biasa
User	Booking & lihat riwayat

🙋‍♀️ Author
Uswatun Hasanah
Mahasiswa Informatika Semester 4
NIM: 23EO10028
UAS Rekayasa Perangkat Lunak 2025

📃 Lisensi
Proyek ini dibuat untuk kebutuhan akademik dan dapat dikembangkan lebih lanjut untuk kebutuhan riil.












