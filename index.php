<?php
require("conn.php");
if(isset($_POST['register'])){

$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

$saveuser = mysqli_query($conn, "insert into clients (fullname, email, password) values('$fname','$email','$pass')") or die(mysqli_error($conn));

if($saveuser) {

    ?>
<script>alert('User registered')</script>
<?php
} else {

    echo "Error";
}


}

?>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body style="background: url(background.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <br>
        <br>
        <div  style="background: #fff; width:30%; padding:20px; opacity: 0.9;">
     
<h3>Online Real Estate System</h3>
<form action="" method="post">
    <input type="text" name="fname" class="form-control" placeholder="Enter Your Full Name" style="margin-bottom: 10px;"/>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" style="margin-bottom: 10px;"/>
    <input type="password" name="password" class="form-control" placeholder="Enter your password" style="margin-bottom: 10px;"> 
    <input type="submit" name="register" class="btn btn-primary" value="Register">

</form>

<p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>