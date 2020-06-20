<?php 
session_start();
$_SESSION['lang']=$_POST['changelang'];
header("Location:../");