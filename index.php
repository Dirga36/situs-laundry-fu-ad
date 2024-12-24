<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link  rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/font/bootstrap-icons.min.css">

    <title>Form Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header mb-0">
                        <h5 class="text-center">Sistem Informasi Laundry<br /> SMKN 7 Baleendah</h5>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
                            } else if ($_GET['pesan'] == "belum login") {
                                echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
                            }
                        }
                        ?>

                        <form action="login.php" method="get">
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username</label>
                                <input type="Username" class="form-control" id="Username" aria-describedby="emailHelp" name="username" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="from-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="log in">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

</html>
