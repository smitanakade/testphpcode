<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myeracademy";

$link = mysqli_connect($servername, $username, $password,$dbname);
if(!$link){
    die('Could not connect: ' . mysql_error());
}

?>