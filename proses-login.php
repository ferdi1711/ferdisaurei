<?php
// Mulai sesi
session_start();

// Periksa apakah data username dan password telah dikirim
if (isset($_POST['username']) && isset($_POST['password'])) {
    $koneksi = new mysqli('localhost', 'root', '', 'ferdi');

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $username = $koneksi->real_escape_string($_POST['username']);
    $password = $koneksi->real_escape_string($_POST['password']);

    // Query untuk memeriksa username dan password
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $koneksi->query($sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result === false) {
        die("Query error: " . $koneksi->error);
    }

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: toko");
        exit(); // Pastikan untuk menambahkan exit() setelah header
    } else {
        // Login gagal
        echo "Username atau password salah!";
    }

    // Tutup koneksi
    $koneksi->close();
} else {
    echo "Silakan isi username dan password.";
}
