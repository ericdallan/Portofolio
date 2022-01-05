<?php 
session_start();
require 'Koneksi.php';
if (isset($_POST['update'])){
    $id = $_GET['id_admin']; 
    
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $No_Hp = $_POST['No_Hp'];   
    $Password = mysqli_real_escape_string($Koneksi,$_POST['Password']);
    $PasswordConfirm = mysqli_real_escape_string($Koneksi,$_POST['PasswordConfirm']);

    $EmailCheck = mysqli_num_rows(mysqli_query($Koneksi,"SELECT * from admin WHERE email='$Email'"));
    if($Password == $PasswordConfirm){
        $update = mysqli_query($Koneksi,"UPDATE admin SET nama = '$Nama', no_hp ='$No_Hp' WHERE id_admin ='$id'");
        $_SESSION['message'] = 'Berhasil Update Profile';
        header("Location: HomeAdmin.php");
    }else{
        echo "Error";
        header("Location: HomeAdmin.php");
    }
}
?>