<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Laundry</title>
    <link  rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.bundle.js"></script>
</head>

<body>
    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan-belum_login");
    }
    ?>
    <?php
    // koneksi database
    include '../koneksi.php';
    ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <?php
            // menangkap id yang dikirim melalui url
            $id = $_GET['id'];
            // megambil data pelanggan yang ber id di atas dari tabel pelanggan
            $transaksi = mysqli_query($koneksi, "select * from transaksi, pelanggan where transaksi_id='$id' and transaksi_pelanggan=pelanggan_id");
            while ($t = mysqli_fetch_array($transaksi)) {
            ?>

                <h2>LAUNDRY SMKN 7 BALEENDAH </h2>

                <h3>INVOICE-<?php echo $t['transaksi_id']; ?></h3>
                <br />

                <table class="table">
                    <tr>
                        <th width="20%">Tgl. Laundry</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_nama']; ?></td>
                    </tr>
                    <tr>
                        <th>HP</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_hp']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Cucian (Kg)</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_berat']; ?></td>
                    </tr>
                    <tr>
                        <th>Tgl. Selesai</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl_selesai']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>

                            <?php
                            if ($t['transaksi_status'] == "0") {
                                echo "<div class='label label-warning'>PROSES</div>";
                            } else if ($t['transaksi_status'] == "1") {
                                echo "<div class='label label-warning'>DI CUCI</div>";
                            } else if ($t['transaksi_status'] == "2") {
                                echo "<div class='label label-warning'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td>
                            <?php echo "Rp. " . number_format($t['transaksi_harga']) . " ,-"; ?>
                        </td>
                    </tr>
                </table>
                <br />
                </td>
                <h4>Daftar Cucian</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Jenis Pakaian</th>
                    </tr>
                    <th width="20%">Jumlah</th>
                    <?php
                    // menyimpan id transaksi ke variabel id_transaksi
                    $id = $t['transaksi_id'];
                    // menampilkan pakaian-pakaian dari transaksi yang ber id di atas
                    $pakaian = mysqli_query($koneksi, "select * from pakaian where pakaian_transaksi='$id'");
                    while ($p = mysqli_fetch_array($pakaian)) {
                    ?>
                        <tr>
                            <td><?php echo $p['pakaian_jenis']; ?></td>
                            <td width="5%"><?php echo $p['pakaian_jumlah']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br />
                <p>
                    <i>" Terima kasih telah mempercayakan cucian anda pada kami ".</i>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>