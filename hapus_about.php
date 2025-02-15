<?php
include('./db_conn.php');

// Pastikan parameter ID tersedia
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Query untuk menghapus berdasarkan ID
    $query = "DELETE FROM about WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Data berhasil di hapus";
    } else {
        $_SESSION['error'] = "Data gagal dihapus";
    }


    $stmt->close();
    $conn->close();

    header("Location: about.php");
    exit;
} else {
    $_SESSION['error'] = "ID tidak valid";
    header("Location: about.php");
    exit;
}
