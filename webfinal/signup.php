<?php
require 'config.php';


echo $_POST['user_name'];
echo $_POST['email'];
echo $_POST['password'];
echo $_POST['co_password'];


$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$co_password = $_POST['co_password'];



if($password != $co_password){
    echo " <br> Password doesn't match";

}else{

$query = "INSERT INTO user ( user_name, email, password, co_password)
VALUES ('$user_name','$email','$password',$co_password)";//'".md5($password)."' للتشفير

$result = mysqli_query($conn, $query);

if(!$result){
    echo mysqli_error($conn);
}
else {
    header ("Location: signin.php");

}
}
?>