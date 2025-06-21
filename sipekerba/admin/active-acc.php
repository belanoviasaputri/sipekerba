<?php
// Mengaktifkan akun user berdasarkan user_id yang diterima dari parameter GET
require '../function.php';
// get value user_id
$id = $_GET["user_id"];

// update status to 1 (aktif)
$status = "1";

$query = "UPDATE user SET status='$status' WHERE user_id='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    // Jika berhasil, tampilkan alert sukses dan redirect ke index
    echo "<script>
                alert('Akun berhasil diaktifkan!'); window.location='index.php';
            </script>";
} else {
    // Jika gagal, tampilkan alert gagal dan redirect ke index
    echo "<script>
                alert('Akun gagal diaktifkan!'); window.location='index.php';
            </script>";
}
