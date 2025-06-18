# MANIS 🍭
**Management for Inventory and Sales Test**

`MANIS` adalah aplikasi berbasis Laravel yang dirancang untuk membantu memantau data barang, stok, dan aktivitas penambahan barang baru secara real-time. Aplikasi ini dikembangkan oleh tim kami sebagai bagian dari proyek sistem informasi modern dengan praktik CI/CD dan clean code.

---

- Frontend, Backend, and Database

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/MySQL-00758F?logo=mysql&logoColor=white)](https://www.mysql.com/)

- Version Control

[![GitHub Stars](https://img.shields.io/github/stars/ikmalsworld/MANIS?style=social)](https://github.com/ikmalsworld/MANIS/stargazers)

- CI/CD

[![Laravel CI/CD](https://img.shields.io/badge/CI/CD-GitHub%20Actions-brightgreen?logo=github-actions)](https://github.com/ikmalsworld/MANIS/actions/workflows/cicd.yml) 


- Devops Tools

[![Docker](https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=white)](https://www.docker.com/)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=ikmalsworld_MANIS&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=ikmalsworld_MANIS)
![PHPStan Status](https://img.shields.io/badge/PHPStan-passing-success?logo=php)
[![Code Style](https://img.shields.io/badge/Laravel_Pint-clean-blue?logo=laravel)]
![Deployment](https://img.shields.io/badge/Deployed_on-AWS_EC2-orange?logo=amazon-aws)

---

# Github
Tools ini berfungsi untuk menyimpan project dalam repository, Versioning, dan menyimpan informasi rahasia melalui GitHub Secret Variables untuk pipeline CI/CD.
![Screenshot 2025-06-17 231650](https://github.com/user-attachments/assets/6110b625-ae66-4b8c-81bc-6e67bc9dcb32)

# Github Actions
Tools ini berfungsi untuk membuat dan menjalankan pipeline CI/CD otomatis mulai dari build, testing, hingga deployment aplikasi ke berbagai platform.

CI/CD Pipeline Content
![Screenshot 2025-06-17 232106](https://github.com/user-attachments/assets/b2cffaf1-bc05-4da3-9e24-bf6056a4a4d1)

CI/CD Pipeline Execution
![Screenshot 2025-06-17 232241](https://github.com/user-attachments/assets/0bfe84d4-0e6d-441e-a5a3-7c253b88adbf)

# Docker
Docker berfungsi untuk membuat sebuah container yang nantinya digunakan untuk mengatur deployment agar aplikasi dapat dijalankan pada environment manapun

docker-compose.yml
![Screenshot 2025-06-17 232935](https://github.com/user-attachments/assets/f94f0f98-4cb7-4b18-88b5-55d39941fda3)

DockerFile
![Screenshot 2025-06-17 233315](https://github.com/user-attachments/assets/68b78aa4-7785-47cb-a180-b7dba7d0be10)

# Laravel
Laravel berfungsi sebagai Frontend sekaligus Backend dari aplikasi kami

Tampilan Frontend
![Screenshot 2025-06-17 233700](https://github.com/user-attachments/assets/23d34271-41de-496b-b870-841438b2b93a)

Backend Laravel
![Screenshot 2025-06-17 233839](https://github.com/user-attachments/assets/3b4698c9-22f7-4358-88dc-78bb1644cdf8)

# Sonarcloud
Tools untuk menganalisis kualitas kode secara mendalam, menemukan bug, code smells, dan potensi kerentanan keamanan di dalam kode sumber.

Hasil Analisis Sonarcloud
![Screenshot 2025-06-17 234137](https://github.com/user-attachments/assets/eb5eddc2-2aa3-4ac6-9513-7872b37bdfe6)

# CloudWatch & SNS
AWS CloudWatch berfungsi untuk memantau sumber daya, aplikasi, dan layanan di EC2, serta mengumpulkan log dan metrik.

Tampilan Monitoring CloudWatch & SNS
![CloudWatch SNS AWS](https://github.com/user-attachments/assets/bf40959b-b533-4a77-8177-162c55136118)

# AWS EC2
Proses perilisan aplikasi ke server produksi AWS EC2 agar dapat diakses pengguna.
![CloudWatch SNS AWS](https://github.com/user-attachments/assets/bf40959b-b533-4a77-8177-162c55136118)


---


## 🚀 Fitur Utama

- ✅ **CRUD Data Barang**
- ✅ **Monitoring Barang Baru Ditambahkan**

- ✅ **Pencarian dan Pengurutan Data**
- ✅ **CI/CD Workflow via GitHub Actions**
- ✅ **Linting otomatis menggunakan Laravel Pint dan PHPStan**
- ✅ **Struktur Laravel 10+ yang rapi dan scalable**

---

## 🧰 Teknologi yang Digunakan

| Teknologi              | Deskripsi                                    |
|------------------------|----------------------------------------------|
| Laravel                | Backend framework utama                      |
| MySQL (Docker)         | Database yang dijalankan dalam container     |
| GitHub Actions         | CI/CD pipeline otomatis                      |
| Laravel Pint           | Code style linter untuk Laravel              |
| PHPStan                | Static analysis tool untuk kode PHP          |
| Composer               | Manajemen dependency untuk PHP               |
| Docker & Docker Compose| Untuk environment lokal dan production-ready |

---

## 📦 Instalasi dan Setup Lokal

### 1. Clone Repo

```bash
git clone https://github.com/ikmalsworld/MANIS.git
cd MANIS
```

### 2. Copy dan konfigurasi env
```bash
cp .env.example .env
```
Edit file .env untuk mengatur koneksi database, lalu:
```bash
docker compose exec app php artisan key:generate
```

### 3. Jalankan Docker dengan Compose
```bash
docker compose -f docker-compose-prod.yml up -d --build
```
Edit file .env untuk mengatur koneksi database, lalu:
```bash
php artisan key:generate
```

### 4. Install Dependency Backend
```bash
docker compose exec app composer install
```

### Jalankan Migrasi dan Seeder
```bash
docker compose exec app php artisan migrate --seed
```
---

## ✅ Prasyarat

Sebelum menjalankan aplikasi secara lokal atau mengatur CI/CD, pastikan kamu telah memenuhi beberapa kebutuhan berikut:

### 🖥️ Perangkat
- Laptop/PC dengan minimal:
  - 4 core CPU
  - RAM ≥ 8 GB
  - Penyimpanan kosong ≥ 25 GB

### 🔧 Tools & Dependencies
- Code Editor (disarankan: [Visual Studio Code](https://code.visualstudio.com/))
- [Laravel](https://laravel.com/) (versi terbaru)
- [MySQL](https://www.mysql.com/)
- [Composer](https://getcomposer.org/)
- [Docker](https://www.docker.com/)
- [GitHub](https://github.com/) dan akses ke repository ini
- [GitHub Actions](https://docs.github.com/en/actions) untuk CI/CD pipeline
- [Laravel Pint](https://laravel.com/docs/11.x/pint) untuk kode styling
- [PHPStan](https://phpstan.org/) untuk static analysis
- [AWS CLI](https://aws.amazon.com/cli/) untuk integrasi cloud

### ☁️ Cloud Integration
- **AWS CloudWatch** – monitoring dan logging
- **AWS SNS (Simple Notification Service)** – notifikasi otomatis
- **[SonarCloud](https://sonarcloud.io/)** – analisis kualitas kode

## 🚀 Cara Menggunakan Aplikasi

### 1. Buka Aplikasi
Akses aplikasi melalui [http://13.55.12.50/](http://13.55.12.50/)

### 2. Tampilan Awal
Di halaman utama, kamu akan melihat tiga komponen utama:
- **Form input produk** untuk menambahkan barang baru
- **Daftar barang** yang sudah ditambahkan
- **Riwayat transaksi** yang mencatat seluruh aktivitas

### 3. Menambahkan Produk
- Isi nama produk pada form di pojok kiri atas
- Masukkan jumlah stok awal
- Klik tombol **“Tambah Produk”** untuk menyimpan

### 4. Menghapus Produk
Jika ingin menghapus produk yang sudah dimasukkan, klik tombol **“Hapus”** pada daftar barang.

### 5. Manajemen Stok
Untuk setiap produk yang ada, kamu bisa melakukan tiga jenis perubahan:
- **➕ Penambahan Stok**: menambah jumlah produk
- **➖ Stok Terjual**: mengurangi stok saat produk terjual
- **♻️ Retur ke Produsen**: juga mengurangi stok, namun tercatat berbeda di riwayat

### 6. Melihat Riwayat Transaksi
Klik tombol **“Riwayat”** di kanan atas untuk melihat seluruh aktivitas transaksi.  
Riwayat mencakup:
- ID Transaksi
- Nama Produk
- Jenis Perubahan (Tambah, Terjual, Retur)
- Jumlah
- Waktu

## 🛠 Rencana Pengembangan

Berikut beberapa hal yang direncanakan untuk pengembangan ke depan:

- 🔁 **Perbaikan Logic Produk Duplikat**  
  Menyesuaikan logika penambahan produk agar nama produk yang sama tidak dianggap sebagai entri baru, melainkan otomatis menambahkan kuantitas ke produk yang sudah ada.

- 👤 **Autentikasi Pengguna**  
  Menambahkan fitur **Register** dan **Login** untuk mengamankan akses dan memungkinkan manajemen stok berdasarkan akun pengguna.

- ⚡ **Optimasi CI/CD Laravel**  
  Mempercepat proses CI/CD dengan menonaktifkan service Laravel yang tidak digunakan saat pipeline berjalan.

👥 Tim Pengembang	      
1. Muhammad Hasan Kamal     5026221173
2. Thariq Kemal Hassan      5026221174
3. Muhammad Afaf	        5026221157
4. Muhammad Yusuf P         5026221196

📄 Lisensi
Proyek ini menggunakan lisensi MIT License.

🙌 Terima Kasih
Terima kasih telah melihat proyek ini. Silakan fork, kasih bintang ⭐, atau beri saran melalui issues atau pull request!
