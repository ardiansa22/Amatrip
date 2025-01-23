# [Amatrip.my.id ](https://amatrip.my.id/)🚀

Amatripm.y.id adalah sebuah platform marketplace berbasis web yang menyediakan layanan **sustainable tourism**. Kami mendukung ekowisata dengan memberikan akses mudah untuk mencari, memesan, dan mengeksplorasi layanan wisata ramah lingkungan secara digital.

## 🌟 Fitur Utama
- **Pencarian Wisata**: Temukan tempat wisata ekologi berdasarkan lokasi, kategori, dan ulasan.
- **Layanan Pemesanan**: Pesan layanan wisata langsung melalui platform kami.
- **Integrasi Pembayaran**: Mendukung metode pembayaran digital yang aman dan cepat.
- **Aksesibilitas Digital**: Desain responsif untuk pengalaman pengguna yang optimal di desktop dan perangkat seluler.
- **Fokus Ramah Lingkungan**: Mengutamakan layanan wisata yang mendukung keberlanjutan lingkungan.

## 🛠️ Teknologi yang Digunakan
- **Front-end**: bootsrap
- **Back-end**: php (laravel framework)
- **Database**: mysql
- **API Integration**: Midtrans

## 📦 Instalasi dan Penggunaan

### 1. Clone Repository
```bash
git clone https://github.com/ardiansa22/Amatrip.git
cd Amatrip
2. Instalasi Dependensi
Instal semua dependensi menggunakan package manager yang sesuai:

bash
Salin
Edit
npm install
3. Konfigurasi Lingkungan
Buat file .env di root project dan tambahkan konfigurasi berikut:

dotenv
Salin
Edit
DB_HOST=<hostname>
DB_USER=<username>
DB_PASS=<password>
CLOUD_STORAGE_KEY=<key>
API_BASE_URL=<base_url>
4. Menjalankan Server
Jalankan aplikasi:

bash
Salin
Edit
npm run start
📋 API Dokumentasi
Endpoint utama untuk layanan:

GET /api/tourist-destinations: Mendapatkan daftar destinasi wisata.
POST /api/bookings: Melakukan pemesanan layanan wisata.
GET /api/bookings/:id: Mendapatkan detail pemesanan berdasarkan ID.
Dokumentasi API lebih lengkap dapat ditemukan di repository ini.

🖼️ Screenshot
![image](https://github.com/user-attachments/assets/04b27975-57ca-411c-a461-92b758c1b534)
