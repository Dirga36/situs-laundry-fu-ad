<?php include 'header.php'; ?>

<?php
// koneksi database
include '../koneksi.php';
?>
<div class="container mb-5">
	<div class="alert alert-info text-center mt-3">
		<h4 style="margin-bottom: 0px"><b>Selamat datang!</b> di sistem informasi laundry.</h4>
	</div>
	<div class="card">
		<div class="card-header">
			<h4>Dashboard</h4>
		</div>
		<div class="card-body">
			<div class="row mb-5">
				<div class="col-md-3">
					<div class="card bg-primary">
						<div class="card-header">
							<h1>
								<i class="bi bi-person-fill"></i>
								<span class="pull-right">
									<?php
									$pelanggan = mysqli_query($koneksi, "select * from pelanggan");
									echo mysqli_num_rows($pelanggan);
									?>
								</span>
							</h1>
							Jumlah Pelanggan
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card bg-warning">
						<div class="card-header">
							<h1>
								<i class="bi bi-arrow-repeat"></i>
								<span class="pull-right">
									<?php
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='0'");
									echo mysqli_num_rows($proses);
									?>
								</span>
							</h1>
							Jumlah Cucian Di Proses
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card bg-info">
						<div class="card-header">
							<h1>
								<i class="bi bi-info-circle-fill"></i>
								<span class="pull-right">
									<?php
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='1'");
									echo mysqli_num_rows($proses);
									?>
								</span>
							</h1>
							Jumlah Cucian Siap Ambil
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card bg-success">
						<div class="card-header">
							<h1>
								<i class="bi bi-check-circle-fill"></i>
								<span class="pull-right">
									<?php
									$proses = mysqli_query($koneksi, "select * from transaksi where transaksi_status='2'");
									echo mysqli_num_rows($proses);
									?>
								</span>
							</h1>
							Jumlah Cucian Selesai
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<h4>Riwayat Transaksi Terakhir</h4>
					<table class="table table-bordered table-striped">
						<tr>
							<th width="1%">No</th>
							<th>Invoice</th>
							<th>Tanggal</th>
							<th>Pelanggan</th>
							<th>Berat (Kg)</th>
							<th>Tgl. Selesai</th>
							<th>Harga</th>
							<th>Status</th>
						</tr>

						<?php
						// mengambil data pelanggan dari database
						$data = mysqli_query($koneksi, "select * from pelanggan, transaksi where transaksi_pelanggan=pelanggan_id order by transaksi_id desc limit 7");
						$no = 1;
						// mengubah data ke array dan menampilkannya dengan perulangan while
						while ($d = mysqli_fetch_array($data)) {
						?> <tr>
								<td><?php echo $no++; ?></td>
								<td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
								<td><?php echo $d['transaksi_tgl']; ?></td>
								<td><?php echo $d['pelanggan_nama']; ?></td>
								<td><?php echo $d['transaksi_berat']; ?></td>
								<td><?php echo $d['transaksi_tgl_selesai']; ?></td>
								<td><?php echo "Rp. " . number_format($d['transaksi_harga']) . " ,-"; ?>
								<td>
									<?php
									if ($d['transaksi_status'] == "0") {
										echo "<div class='label label-warning'>PROSES</div>";
									} else if ($d['transaksi_status'] == "1") {
										echo "<div class='label label-info'>DICUCI</div>";
									} else if ($d['transaksi_status'] == "2") {
										echo "<div class='label label-success'>SELESAI</div>";
									}
									?></td>
								</td>
							</tr>
						<?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

<?php include 'footer.php'; ?>