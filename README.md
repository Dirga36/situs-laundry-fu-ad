# Panel admin dari aplikasi laundry

## Deskripsi Proyek
Proyek ini adalah contoh aplikasi-web laundry dari sisi adminnya. Desain dan fitur halaman ini berdasarkan modul **Git & GitHub Fundamental** tugas sebagai referensi yang diberikan; dan mencakup header, area konten utama, dan footer.

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
Kontribusi sangat diterima! Harap lakukan fork dari repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.
