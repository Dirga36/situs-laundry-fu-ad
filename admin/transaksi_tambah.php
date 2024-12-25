<?php include 'header.php'; ?>

<?php
// koneksi database
include '../koneksi.php';
?>
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h4>Transaksi Laundry Baru</h4>
        </div>
        <div class="card-body">

        <div class="col col-md-offset-2">
            <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
            <br/>
            <br/>
            <form method="post" action="transaksi_aksi.php">
                <div class="form-group">
                    <label>Pelanggan</label>
                    <select class="form-control" name="pelanggan" required="required">
                        <option value="">- Pilih pelanggan</option>
                        <?php
                        // mengambil data pelanggan dari database
                        $data = mysqli_query($koneksi,"select * from pelanggan");
                        // mengubah data ke array dan menampilkan nya dengan perulangan while
                        while($d=mysqli_fetch_array($data)){
                            ?>
                            <option value="<?php echo $d['pelanggan_id']; ?>"><?php echo $d['pelanggan_nama']; ?></option>
                            <?php
                        }
                        ?>
                        </select>
                </div>
                <div class="form-group">
                    <label>Berat</label>
                    <input type="number" class="form-control" name="berat" placeholder="Masukan berat cucian .." required="required">
                </div>

                <div class="form-group">
                    <label>Tgl. Selesai</label>
                    <input type="date" class="form-control" name="tgl_selesai" required="required">
                </div>

                <br/>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Jenis Pakaian</th>
                        <th widht="20%">Jumlah</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                        <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                        <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                        <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
