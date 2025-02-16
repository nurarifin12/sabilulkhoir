<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}

include('./db_conn.php');
include('./component/header.php');

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM kontak WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if (!$data) {
        echo "<p style='color: red;'>Data tidak ditemukan!</p>";
        exit;
    }
} else {
    header("Location: contact.php");
    exit;
}

// Proses Update Data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instagram = trim($_POST['media_sosial']);
    $alamat = trim($_POST['alamat']);
    $email = trim($_POST['email']);
    $facebook = trim($_POST['facebook']);
    $noHp = trim($_POST['nomor_telepon']);

    if (!empty($instagram) && !empty($alamat) && !empty($email) && !empty($facebook) && !empty($noHp)) {
        $query = "UPDATE kontak SET media_sosial = ?, alamat = ?, email = ?, facebook = ?, nomor_telepon = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssi", $instagram, $alamat, $email, $facebook, $noHp, $id);

        if ($stmt->execute()) {
            header("Location: contact.php");
            exit;
        } else {
            $error = "Gagal mengupdate data";
        }
    } else {
        $error = "Semua field harus diisi";
    }
}
?>

<div id="wrapper">
    <?php include('./component/sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include('./component/topbar.php'); ?>
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-4">
                        <h1 class="h3 mb-2 text-gray-800">Form Edit Kontak</h1>
                    </div>
                    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="input-field">
                                <label for="media_sosial">Instagram:</label>
                                <input type="text" name="media_sosial" id="media_sosial"
                                    value="<?php echo $data['media_sosial']; ?>" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="alamat">Alamat:</label>
                                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"
                                    required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>"
                                    required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="facebook">Facebook:</label>
                                <input type="text" name="facebook" id="facebook"
                                    value="<?php echo $data['facebook']; ?>" required><br><br>
                            </div>
                            <div class="input-field">
                                <label for="nomor_telepon">Nomor Telepon:</label>
                                <input type="tel" name="nomor_telepon" id="nomor_telepon"
                                    value="<?php echo $data['nomor_telepon']; ?>" required><br><br>
                            </div>
                            <button type="submit" class="btn bg-primary text-white">Update Data</button>
                            <a href="contact.php" class="btn bg-danger text-white">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./component/footer.php'); ?>
    </div>
</div>