<?php

session_start();
if(!isset($_SESSION['username'])){
    header('Location: form.php?message="You are not loggedIn !"');
}
else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Ytubebooster - Grow your Youtube &amp; Channel</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="style.css">

    <!-- New Css -->
    <link rel="stylesheet" href="./newStyle.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="container">
<?php
if (isset($_GET['message'])){
    ?>
    <div class="alert alert-success">
        <strong>Success!</strong> <?php echo$_GET['message']; ?>.

    </div>
    <?php

}
?>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <span style="font-weight: bold; font-size: x-large">ENTER DATA</span> <div class="pull-right">
                        <form action="">
                        <button class="btn btn-primary" name="logout" >Logout</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="insert.php" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="inputPassword4">Name</label>
                            <input type="text" name="name" class="form-control"  id="inputPassword4" placeholder="Name">
                        </div>

                        <div class="form-group ">
                            <label for="pri">Email</label>
                            <input type="email" class="form-control" id="pri" name="email" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="offset-4 col-4">
                                <input type="submit" name="sub" class="btn btn-primary" name="Add" value="ADD">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if (isset($_GET['logout'])){
   session_destroy();
    header('Location:welcom.php?message="Logged out!"');
}
?>
