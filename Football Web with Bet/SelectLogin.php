<?php
require 'Koneksi.php';

$selectLogin = $_POST['selectLogin'];
if ($selectLogin == 'Premium Membership') {
    header("Location: LoginUserAccountForm.php");
    exit();
}
elseif ($selectLogin == 'Editor') {
    header("Location: LoginEditorAccountForm.php");
    exit();
}
elseif ($selectLogin == 'Admin') {
    header("Location: LoginAdminAccountForm.php");
    exit();	
}
?>