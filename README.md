# Panel admin dari aplikasi laundry

## Deskripsi Proyek
Proyek ini adalah contoh halaman web sederhana. Desain halaman ini berdasarkan modul **Git & GitHub Fundamental** tugas sebagai referensi yang diberikan dan mencakup header, area konten utama, dan footer.

## Fitur
- **Penggunaan CSS**: Mendemonstrasikan bagaimana menggunakan Cascading Style Sheet untuk membuat desain halaman portofolio yang responsif dan modern.
- **Struktur Halaman Dasar**: Menyediakan contoh struktur halaman web dasar dengan header, konten utama, dan footer.

## Kegunaan
Proyek ini berguna sebagai contoh awal untuk:
- Belajar dasar-dasar membuat halaman portofolio.
- Membuat struktur halaman web yang responsif.
- Membuat sebuah _form_ pada halaman web.

## Cara Menjalankan
### Persiapan
• XAMPP (menyediakan _compiler_ PHP, APACHE, localhost dan MySQL yang dibutuhkan untuk menjalankan proyek ini)
### Langkah-langkah
1. **Clone repositori ini**:
    ```bash
    git clone https://github.com/Dirgant/situs-laundry-fu-ad.git
    ```
2. **Pindahkan direktori proyek ke wilayah XAMPP**:
    ```bash
    mv situs-laundry-fu-ad **/xampp/htdoc
    ```
3. **Jalankan XAMPP control panel**
4. **Nyalakan Apache**
5. **Nyalakan PHPMyadmin**
6. **Akses PHPmyAdmin, lalu impor  <a href="database.sql">database.sql</a>**
   ```cmd
   mysql -u root -p
   ```
   ```cmd
   CREATE DATABASE new_database;
   ```
   ```cmd
   mysql -u username -p new_database < database.sql
   ```
8. **Buka browser, tulis direktori proyek, lalu jalankan**

## Struktur Proyek
```
situs-laundry-fu-ad/
├── admin
├── assets
├── README.md
├── database.sql
├── index.php
├── koneksi.php
└── login.php
```

## Kontribusi
Kontribusi sangat diterima! Harap lakukan fork dari repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.
