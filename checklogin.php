<?php
session_start();

require 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        echo "Welcome  " . $email;
        $_SESSION['email'] = $email;

        header("location:home.php");

    } else {
        header("location:signin.php?error=1");
    }
}

?>
