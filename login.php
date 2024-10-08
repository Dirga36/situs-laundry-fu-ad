<?php
//mengaktifkan session php
session_start();

//menghubungkan dengan koneksi
include 'koneksi.php';

//menangkap data yang dikirim dari form
$username = $_GET['username'];
$password =md5($_GET['password']);
//fungsi md5 di atas untuk snkripsi kedalam bentuk md5

//menyeleksi data admin enkripsi dengan username dan password yang sesuai
$data = mysqli_query($koneksi,query: "select * from admin where username='$username' and password='$password'");

//menghitung jumlah data yang di temukan
//fungsi mysql_num_rows() digunakan untuk mengetahui beberapa banyak jumlah baris hasil pemanggilan fungsi mysql_query(). fungsi inimembutuhkan 1 buah argumen, yakni variabel resources hasil dari fungsi mysql_query().
//fungsi mysqli_fetch_array(). fungsi ini digunakan untuk mengubah baris data yang dipilih menjadi pecahan aray.

$cek = mysqli_num_rows(result:$data);

//menghitung jumlah data yang ditemukan
//fungsi mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysql_query(). fungsi ini membutuhkan 1 buah argumen, yakni veriabel resources hasil dari fungsi mysql_query().
//fungsi mysqli_fetch_array(). fungsi ini digunakan untuk mengubah baris data uang dipilih menjadi pecahan array.

$cek = mysqli_num_rows(result:$data);

//cek jika username dan password yang di input ditemukan, buat session dan alihkan halaman ke halaman admin(folder admin),
//jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header(header: "location:admin/index.php");
}else{
    header(header: "location:index.php?pesan=gagal");
}

?>