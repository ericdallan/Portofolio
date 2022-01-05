<?php
// Koneksi Database
include('Koneksi.php');
if (isset($_POST['submit'])) {
    $inputID = $_POST['inputID'];
    $inputJudul = $_POST['inputJudul'];
    $inputPenulis = $_POST['inputPenulis'];
    $inputTahun = $_POST['inputTahun'];
    $inputDeskripsi = $_POST['inputDeskripsi'];
    $inputBahasa = $_POST['Bahasa'];
    $inputTag = implode(", ", $_POST['Tag']);

    $imgFile = $_FILES['inputGambar']['name'];
    $tmp_dir = $_FILES['inputGambar']['tmp_name'];
    $imgSize = $_FILES['inputGambar']['size'];
    $upload_dir = 'gambar/';

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    $inputGambar = rand(1000, 1000000) . "." . $imgExt;
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $inputGambar);
            $query = "INSERT INTO article (id_editor, judul_article, penulis_article, tanggal_terbit, deskripsi, gambar, tag, bahasa) 
            VALUES ('$inputID','$inputJudul','$inputPenulis','$inputTahun','$inputDeskripsi','$inputGambar','$inputTag','$inputBahasa')";
            $Insert = mysqli_query($Koneksi, $query);
            header('Location: HomeEditor.php');
        } else {
            header('Location: HomeEditor.php');
        }
    } else {
        header('Location: HomeEditor.php');
    }

}
