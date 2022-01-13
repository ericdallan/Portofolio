<?php
session_start();
require("Koneksi.php");
if (isset($_GET['id_bet_club'])){
    $id = $_GET['id_bet_club'];
    $_SESSION['message'] = 'Berhasil dihapus';
    $query = "DELETE FROM bet_club where id_bet_club='$id'";
    $delete = mysqli_query($Koneksi, $query);
    header('Location: WebsiteData.php');
}else{
    echo "error";

}
?>