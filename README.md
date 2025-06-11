# MANIS 🍭
**Management for Inventory and Sales Test**

`MANIS` adalah aplikasi berbasis Laravel yang dirancang untuk membantu memantau data barang, stok, dan aktivitas penambahan barang baru secara real-time. Aplikasi ini dikembangkan oleh tim kami sebagai bagian dari proyek sistem informasi modern dengan praktik CI/CD dan clean code.

---

## 📸 Tampilan Antarmuka
![Screenshot 2025-06-11 184336](https://github.com/user-attachments/assets/2d71867b-2021-4e40-b254-3c3944474516)
![Screenshot 2025-06-11 194442](https://github.com/user-attachments/assets/d39c8172-75ac-4538-a774-42ed1f20eeb0)
![Screenshot 2025-06-11 194638](https://github.com/user-attachments/assets/9f558759-169e-4a8a-9503-de216960ad62)

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
Buka browser: http://localhost:8000

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
Nama Lengkap	      
1. Muhammad Hasan Kamal
2. Thariq Kemal Hassan     
3. Muhammad Afaf	        
4. Muhammad Yusuf P       

📄 Lisensi
Proyek ini menggunakan lisensi MIT License.

🙌 Terima Kasih
Terima kasih telah melihat proyek ini. Silakan fork, kasih bintang ⭐, atau beri saran melalui issues atau pull request!
