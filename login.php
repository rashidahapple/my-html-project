<?php
require("conn.php");
if(isset($_POST['login'])){

$email = $_POST['email'];
$pass =md5($_POST['password']);

$saveuser = mysqli_query($conn, "select * from clients where email ='$email' and password='$pass'") or die(mysqli_error($conn));

$count = mysqli_num_rows($saveuser);


if($count == 1) {

    $_SESSION['email'] = $email;
    header("location:dashboard.php");
} else {

   
    ?>
<script>alert('Invalid Username or password')</script>
<?php
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
    <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" style="margin-bottom: 10px;"/>
    <input type="password" name="password" class="form-control" placeholder="Enter your password" style="margin-bottom: 10px;"> 
    <input type="submit" name="login" class="btn btn-primary" value="Login">

</form>

<p>New Here? <a href="index.php">Register</a></p>
<p>Forgot Password? <a href="reset_password.php">Reset Here</a>
    </div>
</div>
</body>
</html>