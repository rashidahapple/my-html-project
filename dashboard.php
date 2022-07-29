<?php
require("conn.php");

$email = $_SESSION['email'];

if($_SESSION['email'] == ""){
  header("location:login.php");
}

$getname = mysqli_query($conn, "select * from clients where email='$email'");
while($row = mysqli_fetch_assoc($getname)){
  $name = $row['fullname'];
}
?>
<html>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<div class="container">


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="padding-right: 320px; ">Internship Real Estate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
       
    </div>
  </div>
</nav>

<?php
echo "Welcome ".$name;
?>
<div class="row">
    <?php
    $gethouses = mysqli_query($conn, "select * from houses where status = 'empty'");

    while($house = mysqli_fetch_assoc($gethouses)){
?>
<div class="col-md-3" style="padding:10px;">
<img src="images/<?php echo $house['img'];?>" style="width:100%; height: 180px;">   
<p style="font-weight: bold"><?php echo $house['hname']; ?></p> 
<a href="booking.php?id=<?php echo $house['id'];?>" class="btn btn-success">Book House</a>
<br>
</div>
<?php
    }
    ?>
</div>


