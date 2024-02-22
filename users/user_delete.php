<?php
session_start();
require '../bd.php';
$id=$_GET['id'];
$delete = "DELETE FROM users WHERE id=$id";
mysqli_query($db_connect, $delete);
$_SESSION['delete']='user delete successfulyy';
header('location:user_list.php');



?>