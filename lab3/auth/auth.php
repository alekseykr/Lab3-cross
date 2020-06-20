<?php
session_start();
include "../database/db.php";

$login= $_POST['login'];
$password= $_POST['password'];

$checkuser = mysqli_query($db_phpmyadmin->connect(), "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($checkuser) > 0) {
    
    $user = mysqli_fetch_assoc($checkuser);
    $_SESSION['id'] = $user['id'];

    if ($user['lang']!="") {
        $_SESSION['lang'] = $user['lang'];
        header("location: ../");
    } else {
        header("location: ../language/chooselang.php");
    }
}
else {
    $_SESSION['message'] = "Wrong login or password";
    header("location: login.php");
}