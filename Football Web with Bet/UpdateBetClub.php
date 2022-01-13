<?php 
session_start();
require 'Koneksi.php';
if (isset($_POST['Update'])){
    $id = $_GET['id_bet_club']; 
    
    $Club = $_POST['Club'];
    $time = $_POST['time'];
    $inputHome = $_POST['inputHome'];
    $inputDraw = $_POST['inputDraw'];
    $inputAway = $_POST['inputAway'];

    $update = mysqli_query($Koneksi,"UPDATE bet_club SET club = '$Club', time ='$time', home = '$inputHome', draw = '$inputDraw', away = '$inputAway'  WHERE id_bet_club ='$id'");
    $_SESSION['message'] = 'Berhasil Update';
    header("Location: WebsiteData.php");
}
?>