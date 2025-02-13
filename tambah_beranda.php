<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}

include('./db_conn.php');

include('./component/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $uplod_dir = 'img/';

    if (!empty($judul) && !empty($deskripsi) && !empty($gambar)) {
        $target_file = $uplod_dir . basename($gambar);

        // Pastikan direktori img ada
        if (!file_exists($uplod_dir)) {
            mkdir($upload_dir, 0777, true);
        }


        if (move_uploaded_file($gambar_tmp, $target_file)) {
            $query = "INSERT INTO beranda (gambar, judul, deskripsi) VALUES  (?, ?, ?)";
            $stmt = $conn->prepare($query);

            $stmt->bind_param("sss", $gambar, $judul, $deskripsi);

            if ($stmt->execute()) {
                header("Location: beranda.php");
                exit;
            } else {
                $error = "Gagal menambah data";
            }
        } else {
            $error = "Gagal menguplod gambar";
        }
    } else {
        $error = "semua field haru di isi";
    }
}

?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- sidebar start -->
    <?php
    include('./component/sidebar.php');
    ?>
    <!-- sidebar end -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php
            include('./component/topbar.php');
            ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-4">
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Beranda</h1>
                    </div>
                    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data" class="user m-4">
                            <div class="form-grup">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" id="judul" class="form-control form-control-user"
                                    required><br><br>
                            </div>

                            <div class="form-grup">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" required
                                    class="form-control form-control-user"></textarea><br><br>
                            </div>

                            <div class="form-grup">
                                <label for="gambar">Gambar:</label>
                                <input type="file" name="gambar" id="gambar" required class="btn"><br><br>
                            </div>

                            <button type="submit" class="btn bg-primary text-white">Tambah Data</button>
                            <a href="beranda.php" class="btn bg-danger text-white ">Kembali</a>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        include('./component/footer.php');
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>