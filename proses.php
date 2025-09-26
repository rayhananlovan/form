<?php
include "config.php";

$nama_produk = $_POST['nama_produk'];
$password    = $_POST['password'];
$kategori    = $_POST['kategori'];
$fitur       = isset($_POST['fitur']) ? implode(",", $_POST['fitur']) : "";
$status      = $_POST['status'];
$deskripsi   = $_POST['deskripsi'];

$sql = "INSERT INTO produk (nama_produk, password, kategori, fitur, status, deskripsi)
        VALUES ('$nama_produk', '$password', '$kategori', '$fitur', '$status', '$deskripsi')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
