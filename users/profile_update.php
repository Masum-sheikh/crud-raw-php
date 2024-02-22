<?php
session_start();
require '../bd.php';
$name =$_POST['name'];
$password =$_POST['password'];
$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$id =$_POST['user_id'];
if(empty($password)){
    $update = "UPDATE users set name= '$name' WHERE id=$id";
    mysqli_query($db_connect,$update);
    $_SESSION['update']='profile updated';
    header('location:profile.php');
}else{
    $update = "UPDATE users set name= '$name', password='$hash_password' WHERE id=$id";
    mysqli_query($db_connect,$update);
    $_SESSION['update']='profile updated';
    header('location:profile.php');
}
?>