<?php 
session_start();
include "../../database/db.php";
$translate_list = [
    'message_list' => [
        'ru' => 'Пользователь изменен',
        'en' => 'User changed',
        'ua' => 'Користувач змінений'
    ],
    'error'=>[
        'ru' => 'Ошибка, все поля должны быть заполнены',
        'en' => 'Error, all fields must be filled',
        'ua' => 'Помилка, все поля повинні бути заповнені'
    ]
];
$name = $_POST['editname'];
$surname = $_POST['editsurname'];
$login = $_POST['editlogin'];
$password = $_POST['editpassword'];
$lang = $_POST['editlanguage'];
$id = $_POST['id_user'];
$role=$_POST['editrole'];
if (!empty($name) && !empty($surname) && !empty($password) && !empty($login)) {
$edit = mysqli_query($db_phpmyadmin->connect(), "UPDATE `users` SET `login` = '$login', `password`='$password', `lang` = '$lang', `name` = '$name', `surname` = '$surname', `role` = '$role' WHERE `id` = '$id'");
$_SESSION['message_list'] = $translate_list['message_list'][$_SESSION['lang']];
header("location: ../Users_list.php");
}
else{
    $_SESSION['error'] = $translate_list['error'][$_SESSION['lang']];
    header("location: edit.php");
}
