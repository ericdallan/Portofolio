<?php 
session_start();
require 'Koneksi.php';

if (isset($_POST['add'])){
    $UserID = $_POST['UserID'];
    $Club = $_POST['selectClub'];
    $Placed_Bet = $_POST['placed_bet'];
    $Date = $_POST['date'];
    $Status = $_POST['status'];
    $Query = "INSERT INTO bet (id_user, club, placed_bet, date, status) VALUES ('$UserID','$Club','$Placed_Bet','$Date','$Status')";
    $Insert = mysqli_query($Koneksi, $Query);
    $_SESSION['message'] = 'Berhasil Bet';
    header('Location: PremiumContent.php');
}