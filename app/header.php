<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="static/style.css">
     <link rel="icon" href="static/image/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <title>M.R</title>
</head>
<body>
<div class="container">
<header>
    <script>(function($){$(function(){$('.button-collapse').sideNav();});})(jQuery);</script>
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"  style="color: #000;"><p><b><h5>Маришкин ручей</h5></b></p></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color: #000;">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a href="#test1"  class="waves-effect waves-light btn" style="color: #000;">вход</a></li>
                        <li class="tab"><a href="#test2"   style="color: #000;">регистрация</a></li>
                    </ul>
                </div>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1" style="color: #000;">вход</a></li>
                    <li class="tab"><a href="#test2" style="color: #000;">регистрация</a></li><br>
                </ul>
            </ul>
        </div>
    </nav>
    <div id="test2" class="col s12 center">
        <div class="container">
            <div class="container">
        <form method="post" action="signup.php">
            <input type="text" name="login" placeholder="Логин" required/>
            <input type="email" name="email" placeholder="email" required/>
            <input type="password" name="password" placeholder="пароль" required/>
            <input type="password" name="re_password" placeholder="пароль еще раз" required/>
            <div class="center">
                <button class="waves-effect waves-light btn" name="button">вперед!</button>
            </div>
        </form>
            </div>
        </div>
    </div>
    <div id="test1" class="col s12 center">
        <div class="container">
            <div class="container">
        <form method="post" action="signup.php">
            <p>
            <input type="text" name="re_login" placeholder="Логин" required/>
            <input type="password" name="re_password" placeholder="пароль" required/>
            <div class="center">
                <button class="waves-effect waves-light btn" name="sumbit">вперед!</button>
            </div>
        </p>
        </form>
            </div>
    </div>
    </div>
</header>
</div>

