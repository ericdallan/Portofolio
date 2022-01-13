<?php 
session_start();
require 'Koneksi.php';

if (isset($_POST['add'])){
    $Club = $_POST['Club'];
    $time = $_POST['time'];
    $inputHome = $_POST['inputHome'];
    $inputDraw = $_POST['inputDraw'];
    $inputAway = $_POST['inputAway'];
    $Query = "INSERT INTO bet_club (club, time, home, draw, away) VALUES ('$Club','$time','$inputHome','$inputDraw','$inputAway')";
    $Insert = mysqli_query($Koneksi, $Query);
    $_SESSION['message'] = 'Berhasil Membuat Bet Club';
    header('Location: WebsiteData.php');
}