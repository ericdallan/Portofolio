<?php
require 'Koneksi.php';

$selectRegister = $_POST['selectRegister'];
if ($selectRegister == 'Premium Membership') {
    header("Location: RegisterUserAccountForm.php");
    exit();
}
elseif ($selectRegister == 'Editor') {
    header("Location: RegisterEditorAccountForm.php");
    exit();
}
?>