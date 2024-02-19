<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "phpecom";

$con = mysqli_connect($host,$username,$password,$database);

if(!$con){
    die("Database connection fails:".mysqli_connect_error());
}
else{
    // echo " connection Successfully ";
}
?>