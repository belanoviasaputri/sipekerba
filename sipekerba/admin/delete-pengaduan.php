<?php
// Menghapus data pengaduan berdasarkan id yang diterima dari parameter GET
require '../function.php';
$id = $_GET['id'];
if (deletePengaduan($id) > 0) {
    // Jika berhasil, tampilkan alert sukses dan redirect ke data-pengaduan
    echo "<script>alert('Data dengan nomor pengaduan $id berhasil dihapus.'); document.location.href='data-pengaduan.php';</script>";
} else {
    // Jika gagal, tampilkan alert gagal dan redirect ke data-pengaduan
    echo "<script>alert('Data gagal dihapus.'); document.location.href='data-pengaduan.php';</script>";
}
