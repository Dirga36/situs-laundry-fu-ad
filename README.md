# LAUNDRY INFORMATION SYSTEM

## Project Description
This project is an example of a laundry web application from the admin side. The design and features of this page are based on the module of my school assignment as a reference provided; includes API and database.
## Features
- **CRUD**: Provides settings for laundry customer data.
- **TRANSACTION**: Sets prices for transactions and transaction flows.
- **INVOICE**: Provides invoice creation.

## Best practice for
This project is useful as an initial example for:
- Authentication and authorization.
- Creating transaction flows.

## Use
### Preparation
• XAMPP (provides the PHP compiler, APACHE, localhost and MySQL required to run this project)
### Steps
1. **Clone this repository**:
``` bash
git clone https://github.com/Dirgant/situs-laundry-fu-ad.git
```
2. **Move the project directory to XAMPP**:
``` bash
mv situs-laundry-fu-ad **/xampp/htdoc
```
3. **Run the XAMPP control panel**
4. **Start Apache**
5. **Start PHPMyadmin**
6. **Access PHPmyAdmin, then import [database.sql](database.sql)**
```cmd
mysql -u root -p
```
```cmd
CREATE DATABASE new_database;
```
```cmd
mysql -u username -p new_database <database.sql
```
8. **Open a browser, type in the project directory, and run**

## Project Structure
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

## Contributions
Contributions are very welcome! Please fork this repository and make a pull request with your changes.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for more details.
