<?php
$hostname = "localhost"; //127.0.0.1
$username = "root";
$password = "";

$db_name = "db_project";
$conn = mysqli_connect($hostname,$username,$password,$db_name);

mysqli_set_charset($conn,"utf8");

?>