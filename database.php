<?php
// config/database.php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'penjualan';

// Inisialisasi koneksi dengan MySQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);

// Penanganan error koneksi
if ($koneksi->connect_error) {
    die("Koneksi Database Gagal: " . $koneksi->connect_error);
}
?>