<?php
include 'configs/connect_db_users.php';

if(isset($_POST['button'])){

    $login = htmlspecialchars($_POST['login']);
    $email = htmlspecialchars($_POS['email']);
    $password = htmlspecialchars($_POST['password']);

    $query = mysqli_query($connect,"INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$login','$email','$password')");

    if ($query == True){
        include 'index.php';
        echo "<div class='center'>ты теперь зарегистрированный пользователь!</div>";
    }else{
        echo "<p style='color:red;'>ошибка при регистрации</p>";
    }


}


if (isset($_POST['sumbit'])){
    $re_login = htmlspecialchars($_POST['re_login']);
    $re_password = htmlspecialchars($_POST['re_password']);

    $re_query = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$re_login'");
    $data = mysqli_fetch_array($re_query);
    if ($data['password'] == $re_password){
        include 'index.php';
    }else {
        include 'index.php';
    }
}



             if(isset($_POST['btn']))
                 if ($_POST['passkod'] == 'ZPXCQ494'){
                     echo "<p  style='text-align: center; color: #000'>тебе выпал пак с фотками гафурова<br><a style='text-align: center;' href='static/fails/qwer.zip' download='qwer.zip'>скачать</a></p>";
                 }

             if ($_POST['passkod'] == 'UHN235'){
                 echo "<p  style='text-align: center; color: #000'>тебе выпала страница в вк<br><a style='text-align: center;' href='static/fails/log.txt' download='log.txt'>скачать</a></p>";
             }

             if ($_POST['passkod'] == 'RZMPRT56') {
                 echo "<p  style='text-align: center; color: #000'>тебе выпал пак интимных фото!<br><a style='text-align: center;' href='static/fails/18.zip' download='18.zip'>скачать</a></p>";
             }
             if ($_POST['passkod'] == 'PISOSR') {
                 echo "<p style='text-align: center; color: #000'>тебе выпала личная переписка<br><a style='text-align: center;' href='static/fails/masseg.txt' download='masseg.txt'>скачать</a></p>";
             }
?>

