<?php 
session_start();
require 'Koneksi.php';

$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$No_Hp = $_POST['No_Hp'];   
$Password = $_POST['Password'];
$data = mysqli_query($Koneksi,"SELECT * FROM editor where email='$Email' and password='$Password'");
$user = mysqli_fetch_array($data);

$time = time();                 
//cek jika setcookie di cek set cookie jika tidak ''
$check = isset($_POST['setcookie'])?$_POST['setcookie']:'';
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['message'] = 'Berhasil Login';
    $_SESSION['login'] = 1;
    $_SESSION['id_editor'] = $user['id_editor'];
    $_SESSION['Email'] = $user['email'];
    $_SESSION['Nama'] = $user['nama'];
    $_SESSION['No_Hp'] = $user['No_Hp'];
    if(isset($_POST['setcookie'])) {
        setcookie('cookieEmail',$Email,time()+(10 *365 * 24 *60 *60));
        setcookie('cookiePass',$Password,time()+ (10 *365 * 24 *60 *60));
     }
    header("Location: HomeEditor.php");
    exit();
}else{
    $_SESSION['message'] = 'Gagal login ';
    header("Location: LoginEditorAccountForm.php");
    exit();
}
?>