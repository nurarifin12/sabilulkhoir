<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}

include('./db_conn.php');
include('./component/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instagram = trim($_POST['media_sosial']);
    $alamat = trim($_POST['alamat']);
    $email = trim($_POST['email']);
    $facebook = trim($_POST['facebook']);
    $noHp = trim($_POST['nomor_telepon']);

    if (!empty($instagram) && !empty($alamat) && !empty($email) && !empty($facebook) && !empty($noHp)) {
        $query = "INSERT INTO kontak (media_sosial, alamat, email, facebook, nomor_telepon) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $instagram, $alamat, $email, $facebook, $noHp);

        if ($stmt->execute()) {
            header("Location: contact.php");
            exit;
        } else {
            $error = "Gagal menambah data";
        }
    } else {
        $error = "Semua field harus diisi";
    }
}
?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php include('./component/sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include('./component/topbar.php'); ?>
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-4">
                        <h1 class="h3 mb-2 text-gray-800">Form Tambah Kontak</h1>
                    </div>
                    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="input-field">
                                <label for="media_sosial">Instagram:</label>
                                <input type="text" name="media_sosial" id="media_sosial" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="alamat">Alamat:</label>
                                <input type="text" name="alamat" id="alamat" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="facebook">Facebook:</label>
                                <input type="text" name="facebook" id="facebook" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="nomor_telepon">Nomor Telepon:</label>
                                <input type="tel" name="nomor_telepon" id="nomor_telepon" required><br><br>
                            </div>
                            <button type="submit" class="btn bg-primary text-white">Tambah Data</button>
                            <a href="contact.php" class="btn bg-danger text-white">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./component/footer.php'); ?>
    </div>
</div>

<!-- Logout Modal -->
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

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>