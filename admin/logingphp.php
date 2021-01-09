<?php

if(isset($_POST['login'])){
    include ('conection.php');
    $uname=$_POST['user'];
    $passwrd=$_POST['pass'];

    if($uname !="" && $passwrd !=""){

        $query="select * from admin where username= '".$uname."' and password = '".$passwrd."'";

        $result = mysqli_query($db,$query);
        $row = mysqli_num_rows($result);

        if($row>0){

            session_start();
            $_SESSION['username'] = $uname;
            $_SESSION['password'] = $passwrd;

            header('Location: detail.php?message="Login successfully"');
        }
        else{
            header('Location: login.php?message="WRONG USERNAME OR PASSWORD"');
        }
    }
}
?>