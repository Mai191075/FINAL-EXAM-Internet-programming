<?php

if (isset($_GET['id'])){

    $id = $_GET['id'];
    require 'config.php';

    $query = "DELETE FROM user WHERE id=$id";

    $result = mysqli_query($conn, $query);

    if($result){
        header("location:index.php");
        
    }
    else{
        echo "something wrong";
        echo mysqli_error($conn);
    }
}
else{
    header("location:index.php");
}


?>