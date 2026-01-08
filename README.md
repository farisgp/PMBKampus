# 🎓 PMB Kampus  
**Aplikasi Penerimaan Mahasiswa Baru Berbasis Web dengan PHP Native**

PMB Kampus adalah aplikasi web berbasis **PHP Native** yang dirancang dan dikembangkan untuk memenuhi tugas individu pada MSIB Kampus Merdeka Batch 3.
Aplikasi ini mendukung pengelolaan data pendaftar, seleksi, serta administrasi PMB dalam satu sistem.

---

## 🚀 Fitur Utama

- 🔐 Login Admin
- 📝 Pendaftaran Mahasiswa Baru
- 📊 Manajemen Data Calon Mahasiswa
- 🗂️ CRUD Data PMB
- 📄 Informasi Penerimaan Mahasiswa Baru
- 🖥️ Dashboard Admin
- 🗃️ Integrasi Database MySQL

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP Native
- **Database**: MySQL / MariaDB
- **Frontend**: HTML, CSS, JavaScript
- **Web Server**: Apache (XAMPP / Laragon)
- **Tools**: phpMyAdmin, Git

---

## ▶️ Cara Menjalankan Aplikasi

### 1. Persiapan Environment

Pastikan perangkat Anda telah terpasang:

- Web Server: **XAMPP / Laragon**
- PHP versi **7.4 atau lebih baru**
- MySQL / MariaDB
- Browser (Chrome / Firefox)

> Disarankan menggunakan **Laragon** atau **XAMPP** untuk kemudahan setup.

---

### 2. Clone atau Download Repository

Clone repository menggunakan Git:

```bash
git clone https://github.com/farisgp/PMBKampus.git
```

- Laragon
  ```C:\laragon\www\PMBKampus```
- XAMPP
  ```C:\xampp\htdocs\PMBKampus```

### 3. Buat Database Baru pmb_kampus dan import file database .sql dari folder database
### 4. Sesuaikan nama database pada file koneksi.php
  $dsn = "mysql:dbname=pmb_kampus;host=localhost";
### 5. Jalankan aplikasi
  http://localhost/PMBKampus
### 6. Login admin
  - Username : admin
  - Password : admin 
