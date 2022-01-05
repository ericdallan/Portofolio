<?php 
session_start();
require 'Koneksi.php';
if (isset($_POST['Update'])){
    $id = $_GET['id_bet']; 
    
    $Club = $_POST['Club'];
    $Placed_bet = $_POST['placed_bet'];
    $Date = $_POST['date'];
    $Status = $_POST['inputStatus'];

    $update = mysqli_query($Koneksi,"UPDATE bet SET Club = '$Club', placed_bet ='$Placed_bet', date = '$Date', status = '$Status'  WHERE id_bet ='$id'");
    $_SESSION['message'] = 'Pembayaran Tervalidasi';
    header("Location: WebsiteData.php");
}
?>