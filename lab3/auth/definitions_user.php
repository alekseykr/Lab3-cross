<?php 
session_start();
$root=$_SERVER["DOCUMENT_ROOT"];

include_once $root."/database/db.php";
$en=$_POST["en"];
$ru=$_POST["ru"];
$ua=$_POST["ua"];

$DefinitionsUser = mysqli_query($db_phpmyadmin->connect(), "SELECT * FROM `users`");

while($user = mysqli_fetch_assoc($DefinitionsUser)){
 
    if ($user['id'] == $_SESSION['id']) {
        $name = $user['name'];
        $surname = $user['surname'];
        $role = $user['role'];
        $lang=$user['lang'];
        $_SESSION['login']=$user['login'];
        $_SESSION['name']=$name;
        $_SESSION['surname']=$surname;
        $_SESSION['role']=$role;
        if(isset($en)){
            $_SESSION['lang'] = "en";
            header("Location: ../index.php");
        }
        else if (isset($ru)){
             $_SESSION['lang'] = "ru";
             header("Location: ../index.php");
        }
        else if (isset($ua)){
            $_SESSION['lang'] = "ua"; 
            header("Location: ../index.php");
        }

    }

}