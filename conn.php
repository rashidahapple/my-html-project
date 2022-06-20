<?php

$host ="localhost:3308";
$user ="root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass);


mysqli_select_db($conn, "monday") or die(mysqli_error($conn));

?>