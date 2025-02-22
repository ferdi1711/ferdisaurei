<?php
session_start();
session_destroy(); // Hapus sesi login
header("Location: ../index.php"); // Kembali ke halaman utama di folder Fious
exit();
