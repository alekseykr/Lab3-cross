<?php
session_start();
include_once "auth/definitions_user.php";
if (isset($_SESSION['id']) && $_SESSION['lang']!="") {
    switch ($role) {
        case 1: {
                header("location:/personal_area/client.php"); 
                break;
        }
        case 2: {
                header("location:/personal_area/manager.php");
                break;
        }
        case 3: {
                header("location:/personal_area/admin.php");
                break;
        }
    }
}
else {
    header("location:/auth/login.php");
}