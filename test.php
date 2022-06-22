<?php
require("conn.php");
$email = $_SESSION['email'];
$getbookings = mysqli_query($conn, "select * from bookings where client_id='$email'") or die(mysqli_error($conn));

?>

<table>
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
?>
<table>