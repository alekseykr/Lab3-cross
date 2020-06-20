<?php
session_start();
include "../../database/db.php";
$translate_list = [
    'message_list' => [
        'ru' => 'Пользователь создан',
        'en' => 'User created',
        'ua' => 'Користувач створен'
    ],
    'error'=>[
        'ru' => 'Ошибка, все поля должны быть заполнены',
        'en' => 'Error, all fields must be filled',
        'ua' => 'Помилка, все поля повинні бути заповнені'
    ]
];
$name = $_POST['createname'];
$surname = $_POST['createsurname'];
$login = $_POST['createlogin'];
$password = $_POST['createpassword'];
$lang = $_POST['createlanguage'];
$role = $_POST['createrole'];
if (!empty($name) && !empty($surname) && !empty($password) && !empty($login)) {
    $create = mysqli_query($db_phpmyadmin->connect(), "INSERT INTO `users`( `name`, `surname`,`login`,`password`, `lang`, `role`,`id`) VALUES ('$name','$surname', '$login', '$password', '$lang', '$role',NULL)");
    $_SESSION['message_list']= $translate_list['message_list'][$_SESSION['lang']];
    header("location: ../Users_list.php");
}
else{
    $_SESSION['error']=$translate_list['error'][$_SESSION['lang']];
    header("location: create.php");
}
