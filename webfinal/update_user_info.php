<?php
    if (isset($_GET['id'])){

    require 'config.php';

    $id = $_GET['id'];

    echo $_POST['user_name'];
    echo $_POST['email'];
    echo $_POST['password'];

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "UPDATE user SET user_name='$user_name', email='$email', password='$password' WHERE id=$id";


    $result = mysqli_query($conn, $query);

    if(!$result){
        echo mysqli_error($conn);
    }
    else {
        
        header("location:index.php");
    }
}
?>