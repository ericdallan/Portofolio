<?php 
session_start();
require 'Koneksi.php';

//untuk menampung value dari form registrasi ke variable baru
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$No_Hp = $_POST['No_Hp'];   
$Password = mysqli_real_escape_string($Koneksi,$_POST['Password']);
$PasswordConfirm = mysqli_real_escape_string($Koneksi,$_POST['PasswordConfirm']);

//mengecek email
$EmailCheck = mysqli_num_rows(mysqli_query($Koneksi,"SELECT * from user WHERE email='$Email'"));

if ($EmailCheck > 0){
    $_SESSION['message'] = 'Email sudah terdaftar !';
    header("Location: RegisterUserAccountForm.php");
    exit();
    //mengecek apakah password sama
}elseif($Password == $PasswordConfirm){
    //memasukkan data register ke dalam database
    mysqli_query($Koneksi,'INSERT INTO user (Nama, Email, Password, No_Hp ) values("'.$Nama.'","'.$Email.'","'.$Password.'","'.$No_Hp.'")');
    $_SESSION['registered'] = 'Berhasil registrasi';
    header("Location: LoginUserAccountForm.php");
}else{
    $_SESSION['message'] = 'Password tidak sama !';
    header("Location: RegisterUserAccountForm.php");
    exit();
}
