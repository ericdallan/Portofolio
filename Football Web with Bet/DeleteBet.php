<?php
session_start();
require("Koneksi.php");
if (isset($_GET['id_bet'])){
    $id = $_GET['id_bet'];
    $_SESSION['message'] = 'Berhasil dihapus';
    $query = "DELETE FROM bet where id_bet='$id'";
    $delete = mysqli_query($Koneksi, $query);
    header('Location: PremiumContent.php');
}else{
    echo "error";

}
?>