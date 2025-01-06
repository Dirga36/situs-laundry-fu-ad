# SISTEM INFORMASI LAUNDRY

## Deskripsi Proyek
Proyek ini adalah contoh aplikasi web laundry dari sisi admin. Desain dan fitur halaman ini didasarkan pada modul tugas sekolah saya sebagai referensi yang diberikan; termasuk API dan basis data.
## Fitur
- **CRUD**: Menyediakan pengaturan untuk data pelanggan laundry.
- **TRANSACTION**: Mengatur harga untuk transaksi dan alur transaksi.
- **INVOICE**: Menyediakan pembuatan faktur.

## Praktik baik untuk
Proyek ini berguna sebagai contoh awal untuk:
- Autentikasi dan otorisasi.
- Membuat alur transaksi.

## Gunakan
### Persiapan
• XAMPP (menyediakan kompiler PHP, APACHE, localhost, dan MySQL yang diperlukan untuk menjalankan proyek ini)
### Langkah-langkah
1. **Klon repositori ini**:
``` bash
git clone https://github.com/Dirgant/situs-laundry-fu-ad.git
```
2. **Pindahkan direktori proyek ke XAMPP**:
``` bash
mv situs-laundry-fu-ad pathTo/xampp/htdoc
```
3. **Jalankan panel kontrol XAMPP**
4. **Jalankan Apache**
5. **Jalankan PHPMyadmin**
6. **Akses PHPmyAdmin, lalu impor [database.sql](database.sql)**
```bash
cd pathTo/xampp/mysql/bin
```
```bash
mysql -u root -p
```
```bash
CREATE DATABASE your_database;
```
```bash
mysql -u username -p your_database <database.sql
```
7. **Konfigurasi [koneksi.php](koneksi.php)**
```
*|
3| koneksi = mysqli_connect ("localhost","root","","your_database");
*|
```
8. **Buka browser, ketik direktori proyek, lalu ENTER**
```bash
http://localhost/situs-laundry-fu-ad-main
```

>CATATAN: admin saat ini adalah Rian(tendam12)

## Struktur Proyek
```
situs-laundry-fu-ad/
┣ 📂admin
┃ ┣ 📜cetak_print.php
┃ ┣ 📜footer.php
┃ ┣ 📜Ganti_password_aksi.php
┃ ┣ 📜ganti_password.php
┃ ┣ 📜git.ignore
┃ ┣ 📜harga_update.php
┃ ┣ 📜harga.php
┃ ┣ 📜header.php
┃ ┣ 📜index.php
┃ ┣ 📜laporan.php
┃ ┣ 📜logout.php
┃ ┣ 📜pelanggan_aksi.php
┃ ┣ 📜pelanggan_edit.php
┃ ┣ 📜pelanggan_hapus.php
┃ ┣ 📜pelanggan_tambah.php
┃ ┣ 📜pelanggan_update.php
┃ ┣ 📜pelanggan.php
┃ ┣ 📜transaksi_aksi.php
┃ ┣ 📜transaksi_edit.php
┃ ┣ 📜transaksi_hapus.php
┃ ┣ 📜transaksi_invoice_cetak.php
┃ ┣ 📜transaksi_invoice.php
┃ ┣ 📜transaksi_tambah.php
┃ ┣ 📜transaksi_update.php
┃ ┗ 📜transaksi.php
┣ 📂assets
┃ ┣ 📂css
┃ ┃ ┣ 📜bootstrap-grid.css
┃ ┃ ┣ 📜bootstrap-grid.css.map
┃ ┃ ┣ 📜bootstrap-grid.min.css
┃ ┃ ┣ 📜bootstrap-grid.min.css.map
┃ ┃ ┣ 📜bootstrap-grid.rtl.css
┃ ┃ ┣ 📜bootstrap-grid.rtl.css.map
┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css
┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css.map
┃ ┃ ┣ 📜bootstrap-reboot.css
┃ ┃ ┣ 📜bootstrap-reboot.css.map
┃ ┃ ┣ 📜bootstrap-reboot.min.css
┃ ┃ ┣ 📜bootstrap-reboot.min.css.map
┃ ┃ ┣ 📜bootstrap-reboot.rtl.css
┃ ┃ ┣ 📜bootstrap-reboot.rtl.css.map
┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css
┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css.map
┃ ┃ ┣ 📜bootstrap-utilities.css
┃ ┃ ┣ 📜bootstrap-utilities.css.map
┃ ┃ ┣ 📜bootstrap-utilities.min.css
┃ ┃ ┣ 📜bootstrap-utilities.min.css.map
┃ ┃ ┣ 📜bootstrap-utilities.rtl.css
┃ ┃ ┣ 📜bootstrap-utilities.rtl.css.map
┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css
┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css.map
┃ ┃ ┣ 📜bootstrap.css
┃ ┃ ┣ 📜bootstrap.css.map
┃ ┃ ┣ 📜bootstrap.min.css
┃ ┃ ┣ 📜bootstrap.min.css.map
┃ ┃ ┣ 📜bootstrap.rtl.css
┃ ┃ ┣ 📜bootstrap.rtl.css.map
┃ ┃ ┣ 📜bootstrap.rtl.min.css
┃ ┃ ┣ 📜bootstrap.rtl.min.css.map
┃ ┃ ┗ 📜git.ignore
┃ ┣ 📂font
┃ ┃ ┣ 📂fonts
┃ ┃ ┃ ┣ 📜bootstrap-icons.woff
┃ ┃ ┃ ┣ 📜bootstrap-icons.woff2
┃ ┃ ┃ ┗ 📜git.ignore
┃ ┃ ┣ 📜bootstrap-icons.css
┃ ┃ ┣ 📜bootstrap-icons.json
┃ ┃ ┣ 📜bootstrap-icons.min.css
┃ ┃ ┣ 📜bootstrap-icons.scss
┃ ┃ ┗ 📜git.ignore
┃ ┣ 📂js
┃ ┃ ┣ 📜bootstrap.bundle.js
┃ ┃ ┣ 📜bootstrap.bundle.js.map
┃ ┃ ┣ 📜bootstrap.bundle.min.js
┃ ┃ ┣ 📜bootstrap.bundle.min.js.map
┃ ┃ ┣ 📜bootstrap.esm.js
┃ ┃ ┣ 📜bootstrap.esm.js.map
┃ ┃ ┣ 📜bootstrap.esm.min.js
┃ ┃ ┣ 📜bootstrap.esm.min.js.map
┃ ┃ ┣ 📜bootstrap.js
┃ ┃ ┣ 📜bootstrap.js.map
┃ ┃ ┣ 📜bootstrap.min.js
┃ ┃ ┣ 📜bootstrap.min.js.map
┃ ┃ ┗ 📜git.ignore
┃ ┗ 📜git.ignore
┣ 📜database.sql
┣ 📜index.php
┣ 📜koneksi.php
┣ 📜login.php
┗ 📜README.md
```

## Kontribusi
Kontribusi sangat diharapkan! Silakan fork repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT - lihat berkas [LICENSE](LICENSE) untuk detail selengkapnya.
