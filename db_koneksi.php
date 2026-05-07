<?php
$servername = "localhost";
$server_username = "root"; // Ganti dengan username database Anda
$server_password = ""; // Ganti dengan password database Anda
$dbname = "anemia";

// Buat koneksi
$conn = new mysqli($servername, $server_username, $server_password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>