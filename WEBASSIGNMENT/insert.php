<?php
if(isset($_POST['sub'])) {
    include('conection.php');
    $title = $_POST['name'];
    $email = $_POST['email'];
    $query = "insert into userlab (name,email) values('$title','$email')";
    // mysqli_query($db,$query);

    if ($db->query($query) === TRUE) {
        session_start();
        $_SESSION['username'] = $title;
        $_SESSION['password'] = $email;
        header('Location:welcom.php?message=Data Inserted Successfully');
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
}
?>