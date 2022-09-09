<?php
$sname= "remotemysql.com";

$unmae= "RWwwXzy6b2";

$password = "YnIuW8uVNY";

$db_name = "RWwwXzy6b2";
session_start();
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

?>
