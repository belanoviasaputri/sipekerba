<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari SINTAK!'); window.location='../index.php';</script>";
