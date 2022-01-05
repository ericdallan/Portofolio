<?php
// Koneksi Database
session_start();
include('Koneksi.php');
if (isset($_POST['pay'])) {
    $BetID = $_POST['BetID'];
    $Club = $_POST['Club'];
    $placed_bet = $_POST['placed_bet'];
    $date = $_POST['date'];
    $_SESSION['message'] = 'Success Payment, Wait for Validation';

    $imgFile = $_FILES['inputGambar']['name'];
    $tmp_dir = $_FILES['inputGambar']['tmp_name'];
    $imgSize = $_FILES['inputGambar']['size'];
    $upload_dir = 'payment/';

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    $inputGambar = rand(1000, 1000000) . "." . $imgExt;
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) { 
            move_uploaded_file($tmp_dir, $upload_dir . $inputGambar);
            $query = "INSERT INTO payment (id_bet, club, placed_bet, date, gambar) 
            VALUES ('$BetID','$Club','$placed_bet','$date','$inputGambar')";
            $Insert = mysqli_query($Koneksi, $query);
            $_SESSION['message'] = 'Success Payment, Wait for Validation';
            header('Location: PremiumContent.php');
        } else {
            header('Location: PremiumContent.php');
        }
    } else {
        header('Location: PremiumContent.php');
    }

}
