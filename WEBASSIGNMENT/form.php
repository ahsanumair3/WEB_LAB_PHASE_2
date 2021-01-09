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
<?php
if (isset($_GET['message'])){
    ?>
    <div class="alert alert-danger">
        <strong>Error!</strong> <?php echo$_GET['message']; ?>.
    </div>
    <?php
    unset($_GET['message']);
}
?>
<div class="container" id="m">
    <div class="row" id="n">
        <div class="col-md-7 float-left " style="background-color: white; border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
            <div class="modal-body">
                <div class="py-3 px-2">
                    <h1 class="modal-title py-5" id="exampleModalLabel" style="color: black; text-align: center;"><strong>Sing in</strong></h1>
                    <form action="logingphp.php" method="post">
                        <div class="form-group mb-3 text-center">
                            <input type="text" name="user" class="form-control modal-input bg-light"
                                   placeholder="Username">
                            <input type="password" name="pass" class="form-control modal-input bg-light"
                                   placeholder="Password">
                            <br>
                            <span
                                class="my-4 ">Forgot Your Password?</span>
                            <div class="my-3 text-center mx-auto">
                                <button class="btn modal-form-btn saasbox-btn white-btn" name="login" type="submit">
                                    SIGN IN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 float-right " >
            <div class="modal-body">
                <div class="py-3">
                    <h3 class="text-center" style=" margin-top:150px; color: white">Hello, Friend!</h3>
                    <p class="text-center" style="color: white">Enter Your Personal Details and start Journey with us</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
