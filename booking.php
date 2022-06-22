<?php
require("conn.php");

if($_SESSION['email'] == ""){
    header("location:login.php");
  }

$email = $_SESSION['email'];
if($_GET['id'] != ""){
$id = $_GET['id'];
}
$savebooking = mysqli_query($conn, "insert into bookings (client_id, house_id, status) values('$email','$id','booked')");

if($savebooking) {
?>

<script>alert("Booking done")</script>

<?php

$getbookings = mysqli_query($conn, "select * from bookings where client_id='$email'") or die(mysqli_error($conn));

?>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<table class="table">
<thead>
    <tr>
      
      <th scope="col">House </th>
    </tr>
  </thead>
  <tbody>
  <?php
while($booking = mysqli_fetch_assoc($getbookings)){
    $hid = $booking['house_id'];

    $getnames = mysqli_query($conn, "select * from houses where id='$hid'");

    while($gothouses = mysqli_fetch_assoc($getnames)){
    ?>
<tr><td><?php echo $gothouses['hname']; ?></td></tr>
<?php
    }
}
}
?>
<table>