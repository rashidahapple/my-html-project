<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .menu {
            color: #000;
            padding: 10px;
            text-decoration: none;
        }
        </style>
</head>

<div class="container">
    <div class="row">
<div class="col-md-6">
<h3>Internship Real Estate</h3>
</div>
<div class="col-md-6">
<a href="#" class="menu">Dashboard</a><a href="#" class="menu">My Bookings</a><a href="#" class="menu">Profile</a><a href="#" class="menu">Logout</a>
</div>
</div>
<div class="row">
<?php
for($count = 1; $count <= 8; $count++) {
    ?>
    <div class="col-md-3">
    <img src="/images/1.jpg">
<h3>Hello World</h3>
<a href="#" class="btn btn-success">Book House</a>
</div>
<?php
}
?>
</div>
</div>