# MANIS 🍭
**Management for Inventory and Sales Test**

`MANIS` adalah aplikasi berbasis Laravel yang dirancang untuk membantu memantau data barang, stok, dan aktivitas penambahan barang baru secara real-time. Aplikasi ini dikembangkan oleh tim kami sebagai bagian dari proyek sistem informasi modern dengan praktik CI/CD dan clean code.

---
## Challenges Encountered
### Day1
Database tidak otomatis migrate dari local php ke docker, sehingga harus force di actions.

![Image](https://github.com/user-attachments/assets/cf9cd328-b613-4b8d-96f8-093055ffadc3)

![Image](https://github.com/user-attachments/assets/26b53e2f-5609-4eed-b460-2571bc1d692c)

### Day2
- Perlu menerapkan CD, payment method di GCP problematik sehingga harus mengganti dengan AWS.
- Deployment ke EC2 AWS tidak berjalan lancar, solusinya dengan reset EC2.

![Image](https://github.com/user-attachments/assets/9fa78bc8-b618-47d5-ab3c-c91bae9d4748)

![Image](https://github.com/user-attachments/assets/5bdabb01-502f-4344-8911-7122311272c0)

![Image](https://github.com/user-attachments/assets/697355dd-f99d-466d-aa72-fa8c56b1db92)

### Day3
Sonarcloud preferred, karena lebih praktis setup dan penggunaannya.

![Image](https://github.com/user-attachments/assets/3ad2e86b-dcd9-4c18-a31a-22f8b8bc7190)

![Image](https://github.com/user-attachments/assets/3676aab2-612b-4838-96ef-8665a58b1f6d)

![Image](https://github.com/user-attachments/assets/e799cf24-6eb3-4c01-bfac-c6ee07fec07d)

### Day4
- Integrasi Prometheus Grafana membuat Sonarcloud Quality Test gagal, 0% passed.
- Debugging Prometheus Grafana tidak berhasil, Radis dan APCU tidak kompatibel dengan PHP 8.2, perlu alternatif, solusinya Cloudwatch + SNS.

![Image](https://github.com/user-attachments/assets/8df8e357-072d-4add-af62-61a41f5dfe12)

![Image](https://github.com/user-attachments/assets/75686c8c-9aac-45fd-97f9-a356ad40a6d8)

---

## Struktur Proyek
### Struktur file
```
MANIS-main/
├── .editorconfig
├── .env.example
├── .env.production
├── .env.testing
├── .gitattributes
├── .gitignore
├── .php-cs-fixer.dist.php
├── docker-compose.yml
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── Providers/
├── config/
│   ├── app.php
│   └── database.php
├── routes/
│   └── web.php
└── Laravel
```


### Konfigurasi dan Root Files
- **.editorconfig, .gitattributes, .gitignore:** File konfigurasi umum untuk editor, Git, dan atribut file.


- **.env.example, .env.production, .env.testing:** Contoh dan versi environment variables untuk berbagai lingkungan.


- **Dockerfile, docker-compose.yml, docker-compose-prod.yml:** Digunakan untuk containerisasi dengan Docker.


- **README.md:** Dokumentasi proyek.


- **artisan:** CLI tool Laravel (untuk menjalankan perintah seperti php artisan migrate, serve, dll.).


- **composer.json, composer.lock:** Dependency manager untuk PHP (Composer).


- **package.json:** Dependency untuk Node.js (umumnya untuk frontend asset via Vite atau Laravel Mix).


- **phpunit.xml:** Konfigurasi untuk testing dengan PHPUnit.


- **phpstan.neon:** Konfigurasi untuk PHPStan (static analysis).


- **vite.config.js:** Konfigurasi bundler frontend Vite.


- **sonar-project.properties:** Konfigurasi untuk SonarCloud (code analysis).

### Folder-Folder Utama
1. app/
Tempat inti aplikasi Laravel:
- **Http/:** Controller dan middleware.


- **Models/:** Model-model database.


- **Providers/:** Service providers Laravel.


2. bootstrap/
- Mengatur autoload dan bootstrapping Laravel, biasanya hanya app.php.
3. config/
- Berisi konfigurasi Laravel seperti app.php, database.php, mail.php, dll.
4. database/
- **factories/, migrations/, seeders/:** Untuk database migration, seeding, dan pembuatan dummy data.


5. public/
- Folder web root. Berisi index.php, asset publik (gambar, JS/CSS hasil build).
6. resources/
- Berisi view (Blade templates), asset mentah (JS/CSS/SASS), dan file lokalization/lang.
7. routes/
- Definisi routing Laravel, umumnya file:
- **web.php:** Routing untuk aplikasi web.


- **api.php:** Routing untuk API.


- **console.php, channels.php:** Routing tambahan untuk CLI/event broadcasting.


8. storage/
   Berisi log, cache, dan file upload.
- **app/, logs/, framework/:** Digunakan Laravel secara internal.


9. tests/
    Folder untuk testing.
- **Feature/:** Test dari end-to-end fitur.


- **Unit/:** Test unit-level.
10. laravel/

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

| Teknologi     | Deskripsi                            |
|---------------|--------------------------------------|
| Laravel       | Backend framework utama              |
| MySQL         | Database default                     |
| GitHub Actions| CI/CD pipeline                       |
| Laravel Pint  | Code style linter                    |
| PHPStan       | Static analysis                      |
| Composer/NPM  | Dependency management                |

---

## 📦 Instalasi dan Setup Lokal

### 1. Clone Repo
```bash
git clone https://github.com/ikmalsworld/MANIS.git
cd MANIS
```

### 2. Install Dependency
```bash
composer install
npm install && npm run dev
```

### 3. Copy dan Konfigurasi .env
```bash
cp .env.example .env
```
Edit file .env untuk mengatur koneksi database, lalu:
```bash
php artisan key:generate
```

### 4. Jalankan Migrasi dan Seeder
```bash
php artisan migrate --seed
```

---

▶️ Menjalankan Aplikasi
```bash
php artisan serve
```
Buka browser: http://localhost:8001

📊 Fitur Monitoring Barang
Route: /monitoring-barang
Menampilkan daftar 10 barang terakhir yang ditambahkan ke dalam sistem.

🧪 CI/CD & Linting
CI/CD diatur menggunakan GitHub Actions dengan langkah:
- Instalasi PHP dan dependencies
- Linting via Laravel Pint
- Analisis statik via PHPStan
- PHPCS (optional)
- PHPUnit Test (jika ditambahkan nanti)

Contoh perintah manual untuk linting:
```bash
vendor/bin/pint --test
vendor/bin/phpstan analyse
vendor/bin/phpcs
```

👥 Tim Pengembang	      
1. Muhammad Hasan Kamal
2. Thariq Kemal Hassan     
3. Muhammad Afaf	        
4. Muhammad Yusuf P       

📄 Lisensi
Proyek ini menggunakan lisensi MIT License.

🙌 Terima Kasih
Terima kasih telah melihat proyek ini. Silakan fork, kasih bintang ⭐, atau beri saran melalui issues atau pull request!
