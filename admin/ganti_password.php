<?php include 'header.php'; ?>

<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
	<br />
	<br />
	<br />
	<div class="col-md-3 col-md-offset-3">
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "oke") {
				echo "<div class = 'alert alert-success'> Password telah digantil </div>";
			}
		}
		?>
		<div class="card">
			<div class="card-header">
				<h4> Ganti Password</h4>
			</div>
			<div class="card-body">
				<form method="post" action="ganti_password_aksi.php">
					<div class="form-group">
						<label Masukkan Password Baru></label>
							<input type="password" class="form-control" name="password baru" placeholder="Masukkan password baru anda..">
					</div>
					<br />
					<input type="submit" class="btn btn-primary" value="Ganti Password">
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>