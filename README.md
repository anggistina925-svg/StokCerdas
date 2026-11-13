# StokCerdas

## Sistem Informasi Analisis Persediaan dan Rekomendasi Pengadaan Barang Berbasis Web

### Identitas Mahasiswa

- **Nama:** Anggistina
- **NIM:** C2483207011
- **Semester/Kelas:** V / PTI5&#x20;
- **Mata Kuliah:** Pemrograman Internet
- Dosen Pengampu : Taofik Muhammad, M.Kom&#x20;

### 1. Deskripsi Proyek

StokCerdas merupakan aplikasi berbasis web yang dibuat menggunakan Laravel untuk membantu pengguna mengelola dan menganalisis persediaan barang. Aplikasi ini menyediakan informasi stok barang, pengelompokan kategori, analisis kondisi persediaan, serta rekomendasi pengadaan barang.

### 2. Tujuan

- Mempermudah pemantauan persediaan barang.
- Mengetahui kondisi stok barang.
- Menghitung stok akhir secara otomatis.
- Memberikan rekomendasi jumlah pengadaan barang.
- Membantu menentukan prioritas pembelian barang.

### 3. Fitur Aplikasi

1. Dashboard: Menampilkan ringkasan jumlah barang dan kategori.
2. Data Barang: Menampilkan daftar barang beserta informasi stok dan harga.
3. Detail Barang: Menampilkan informasi lengkap setiap barang.
4. Kategori: Mengelompokkan barang berdasarkan kategori.
5. Analisis Stok: Menghitung stok akhir dan menentukan status persediaan.
6. Rekomendasi Pengadaan: Menampilkan kebutuhan pembelian dan estimasi biaya.
7. Tentang: Menampilkan informasi aplikasi.
8. Panduan: Menampilkan petunjuk penggunaan aplikasi.

### 4. Teknologi yang Digunakan

- Laravel
- PHP
- HTML
- CSS
- Bootstrap
- Blade Template

### 5. Implementasi MVC

- **Model:** Data barang disimpan menggunakan array PHP tanpa database.
- **View:** Menggunakan Blade untuk menampilkan halaman aplikasi.
- **Controller:** Mengelola data barang, kategori, analisis stok, dan rekomendasi pengadaan.

### 6. Logika Perhitungan

Stok akhir dihitung menggunakan rumus:

Stok Akhir = Stok Awal + Barang Masuk - Barang Keluar

Status persediaan:

- Habis: Stok akhir sama dengan nol.
- Menipis: Stok akhir di bawah stok minimum.
- Aman: Stok akhir sama dengan atau di atas stok minimum.

Jumlah pengadaan:

Kebutuhan Pengadaan = Target Stok - Stok Akhir

Jika hasilnya negatif, kebutuhan pengadaan ditetapkan menjadi nol.

### 7. Cara Menjalankan Aplikasi

1. Clone repository GitHub.
2. Buka folder proyek melalui terminal.
3. Jalankan `composer install`.
4. Jalankan `php artisan serve`.
5. Buka browser melalui alamat `http://127.0.0.1:8000`.

### 8. Screenshot Aplikasi

Screenshot aplikasi dapat dilihat pada folder `screenshots` yang berisi tampilan:

- Dashboard
  <img width="943" height="416" alt="Dashboard" src="https://github.com/user-attachments/assets/f7fb69c7-bb2b-4405-9d46-97a4cd0cc22b" />

- Data Barang
<img width="917" height="406" alt="Data-Barang" src="https://github.com/user-attachments/assets/f90e5f55-a10b-4b8f-ad13-a158d8e6f6c7" />
<img width="863" height="401" alt="Data -Barang" src="https://github.com/user-attachments/assets/f8955f61-059d-4dd5-b665-2f8b482f271d" />

- Analisi stok
<img width="945" height="469" alt="analisi_stok" src="https://github.com/user-attachments/assets/d4f0777d-e707-4e06-a978-3c2e2a68a6ac" />

<img width="888" height="281" alt="analisis stok" src="https://github.com/user-attachments/assets/8001b5b6-d4cf-42d7-afed-f3d3003f4374" />

- Kategori
<img width="959" height="468" alt="kategori" src="https://github.com/user-attachments/assets/9b3f0d2b-ee6c-44e1-8169-2b040f0a13fe" />

- Rekomendasi Pengadaan
<img width="931" height="463" alt="Rekomendasi 1" src="https://github.com/user-attachments/assets/f2fde772-b345-46f8-ba2d-c6fb24de7737" />

- Panduan
<img width="926" height="464" alt="panduan" src="https://github.com/user-attachments/assets/65c94693-d12f-44ad-b5c0-927a5c44b826" />


### 9. Kesimpulan

StokCerdas dibuat sebagai aplikasi pengelolaan persediaan barang berbasis web menggunakan Laravel dengan menerapkan konsep Routing, Controller, Blade, dan MVC. Aplikasi ini membantu pengguna mengetahui kondisi persediaan serta memperoleh rekomendasi pengadaan barang berdasarkan perhitungan stok.


