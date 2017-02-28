<?php
$connect = mysqli_connect('mysql.hostinger.ru','root','ZRWP949','u302942965_murik');

if(mysqli_connect_errno()){
    echo 'connect error('.mysqli_connect_errno().')';
    exit();
}
?>