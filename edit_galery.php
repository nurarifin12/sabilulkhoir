<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}

include('./db_conn.php');

include('./component/header.php');

// ambil data berdasarkan ID
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$query = "SELECT * FROM galeri WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Data tidak ditemukan";
    exit;
}

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    $gambar_lama = $row['gambar'];
    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $uplod_dir = 'img/';

    // jika ada file gambar baru yang di uplod gunakan gambar baru
    if (!empty($gambar)) {
        $target_file = $uplod_dir . basename($gambar);

        // pastikan direktori img ada
        if (!file_exists($uplod_dir)) {
            mkdir($uplod_dir, 0777, true);
        }

        if (move_uploaded_file($gambar_tmp, $target_file)) {
            $gambar_baru = $gambar;
        } else {
            $error = "GAGAL UPLOD GAMBAR";
        }
    } else {
        $gambar_baru = $gambar_lama;
    }

    if (!empty($judul) && !empty($deskripsi)) {
        $query = "UPDATE galeri SET judul = ?, deskripsi = ?, gambar = ? WHERE id = ?";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sssi", $judul, $deskripsi, $gambar_baru, $id);
            if ($stmt->execute()) {
                header('Location: galery.php');
                exit;
            } else {
                echo "gagal update data" . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Query gagal dipersiapkan: " . $conn->error;
        }
    } else {
        $error = "Semua field harus di isi";
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
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Beranda</h1>
                    </div>
                    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                    <div class="card-body m-5">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="input-field">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" id="judul" value="<?php echo $row['judul']; ?>"
                                    required><br><br>
                            </div>

                            <div class="input-field">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi"
                                    required><?php echo $row['deskripsi']; ?></textarea><br><br>
                            </div>

                            <label for="gambar">Gambar:</label>
                            <input type="file" name="gambar" id="gambar"><br><br>
                            <img src="img/<?php echo $row['gambar']; ?>" width="150" alt="Gambar Beranda"><br><br>

                            <button type="submit" class="btn bg-primary text-white">Update Data</button>
                            <a href="kegiatan.php" class="btn bg-danger text-white">Kembali</a>
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