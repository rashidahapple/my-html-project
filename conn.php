<?php
session_start();
error_reporting(0);
$host ="localhost";
$user ="root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass);


mysqli_select_db($conn, "monday") or die(mysqli_error($conn));

?>