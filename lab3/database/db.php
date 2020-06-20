<?php

$db_phpmyadmin = new Database();

class Database
{
    public $phpmyadmin_host = "localhost";
    public $phpmyadmin_login = "alex";
    public $phpmyadmin_password = "123";
    public $phpmyadmin_name = "lab_3-cross";
    function connect()
    {
        $connectphpmyadmin = mysqli_connect($this->phpmyadmin_host, $this->phpmyadmin_login, $this->phpmyadmin_password, $this->phpmyadmin_name);
        return $connectphpmyadmin;
    }

    function checkData($column, $values)
    {
        $result = mysqli_query($this->connect(), "SELECT * FROM `users` WHERE `$column` = '$values'");
        return mysqli_num_rows($result);
    }
    function checkUser()
    {
        $myloginphpmyadmin = $_SESSION['user']['login'];
        $connect = mysqli_query($this->connect(), "SELECT * FROM `users` WHERE `login` = '$myloginphpmyadmin'");
        $res = mysqli_fetch_assoc($connect);
        return $res;
    }
}

