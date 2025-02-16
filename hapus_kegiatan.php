<?php
include('./db_conn.php');

// Pastikan parameter ID tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil nama gambar berdasarkan ID
    $query = "SELECT gambar FROM kegiatan WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data) {
        $gambar = $data['gambar'];

        // Hapus file gambar jika ada
        if (file_exists("img/$gambar")) {
            unlink("img/$gambar");
        }

        // Hapus data dari database
        $query = "DELETE FROM kegiatan WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Data berhasil dihapus!'); window.location = 'kegiatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data!'); window.location = 'kegiatan.php';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location = 'kegiatan.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location = 'kegiatan.php';</script>";
}
