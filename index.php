<?php
require_once __DIR__ . '/Form.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Produk/Jasa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Input Produk / Jasa</h2>
    <?php
    $form = new Form("proses.php", "POST");

    echo $form->open();
    echo $form->inputText("nama_produk", "Nama Produk/Jasa");
    echo $form->inputPassword("password", "Password Admin");
    echo $form->inputRadio("kategori", ["jasa"=>"Jasa", "produk"=>"Produk", "layanan"=>"Layanan"]);
    echo $form->inputCheckbox("fitur", ["garansi"=>"Garansi", "cepat"=>"Cepat", "murah"=>"Murah"]);
    echo $form->select("status", ["aktif"=>"Aktif", "nonaktif"=>"Nonaktif"]);
    echo $form->textarea("deskripsi", "Deskripsi");
    echo $form->submit("Simpan Data");
    echo $form->close();
    ?>
</div>
</body>
</html>
