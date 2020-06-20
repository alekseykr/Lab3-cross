<?php
session_start();
include_once "../../database/db.php";
$translate = [
    'lang' => [
        'ru' => 'Пользователь удален',
        'en' => 'User deleted',
        'ua' => 'Користувача видалено'
    ]
];
$id = $_POST['delete'];
$delete = mysqli_query($db_phpmyadmin->connect(), "DELETE FROM `users` WHERE `id` = '$id'");
$_SESSION['message_list']=$translate['lang'][$_SESSION['lang']];
header("Location: ../Users_list.php");
