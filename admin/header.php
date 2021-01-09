<?php

session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php?message="You are not loggedIn !"');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Font stylesheet -->
    <link href="style.css" rel="stylesheet">

    <title>Home</title>
</head>
<body>
<!---------------------------------navbar------------------------------>

<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top ">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="100px" height="100px"> </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav  modal-body ">
            <li class="nav-item">
                <a class="nav-link" href="detail.php">Items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addproduct.php">Add Items</a>
            </li>
        </ul>
        <div class="font ml-auto">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <a href="signout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
    </div>
</nav>
<?php
if (isset($_GET['message'])){
    ?>
    <div class="alert alert-success">
        <strong>Success!</strong> <?php echo$_GET['message']; ?>.
    </div>
<?php
}
?>

<!---------------------------------navbar------------------------------>
