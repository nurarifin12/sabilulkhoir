<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}

include('./db_conn.php');

include('./component/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sejarah = trim($_POST['sejarah']);
    $visi = trim($_POST['visi']);
    $misi = trim($_POST['misi']);

    if (!empty($sejarah) && !empty($visi) && !empty($misi)) {

        $query = "INSERT INTO about (sejarah, visi, misi) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $sejarah, $visi, $misi);

        if ($stmt->execute()) {
            header("Location: about.php");
            exit;
        } else {
            $error = "Gagal menambah data";
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
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah About</h1>
                    </div>
                    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="input-field">
                                <label for="sejarah">Sejarah:</label>
                                <textarea name="sejarah" id="sejarah" required></textarea><br><br>
                            </div>
                            <div class="input-field">
                                <label for="visi">Visi:</label>
                                <textarea name="visi" id="visi" required></textarea><br><br>
                            </div>

                            <div class="input-field">
                                <label for="misi">Misi:</label>
                                <textarea name="misi" id="misi" required></textarea><br><br>
                            </div>

                            <button type="submit" class="btn bg-primary text-white">Tambah Data</button>
                            <a href="about.php" class="btn bg-danger text-white">Kembali</a>
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