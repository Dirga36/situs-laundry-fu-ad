<?php include 'header.php'; ?>

<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="card">
            <div class="card-header">
                <h4>Tambah Pelanggan Baru</h4>
            </div>
            <div class="card-body">

                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama ..">
                    </div>

                    <div class="form-group">
                        <label>HP</label>
                        <input type="number" class="form-control" name="hp" placeholder="Masukan no Hp ..">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat ..">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>