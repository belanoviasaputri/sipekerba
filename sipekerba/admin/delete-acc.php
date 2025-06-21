<?php
// Menghapus user berdasarkan id yang diterima dari parameter GET
require '../function.php';
$id = $_GET['id'];
if (deleteUser($id) > 0) {
    // Jika berhasil, tampilkan alert sukses dan redirect ke index
    echo "<script>alert('User $id berhasil dihapus.'); document.location.href='index.php';</script>";
} else {
    // Jika gagal, tampilkan alert gagal dan redirect ke index
    echo "<script>alert('User gagal dihapus.'); document.location.href='index.php';</script>";
}
