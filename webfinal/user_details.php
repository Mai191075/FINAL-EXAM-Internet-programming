<?php
    if (isset($_GET['id'])){

        require 'config.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM user WHERE id=$id";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result);

        echo "user id: " . $row['id'];
        echo "<br>";
        echo "user_name: " . $row['user_name'];
        echo "<br>";
        echo "email: " . $row['email'];
        echo "<br>";
        echo "password: " . $row['password'];
        echo "<br>";
    } else {
        header ("Location: index.php");
        }
    
?>