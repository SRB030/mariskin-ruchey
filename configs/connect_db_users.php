<?php
$connect = mysqli_connect('mysql.hostinger.ru','u302942965_toor','ZRWP949','u302942965_users');

if(mysqli_connect_errno()){
    echo 'connect error('.mysqli_connect_errno().')';
    exit();
}
?>
