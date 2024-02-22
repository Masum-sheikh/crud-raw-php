<?php
session_start();

require 'bd.php';

$email=$_POST['email'];
$password=$_POST['password'];
$select= "SELECT COUNT(*) as paisi FROM users WHERE email='$email'";
 $select_quiry=mysqli_query($db_connect,$select);
$after_asssoc=mysqli_fetch_assoc( $select_quiry);

if($after_asssoc['paisi']==1){
    $user= "SELECT * FROM users WHERE email='$email'";
    $user_query=mysqli_query($db_connect,$user);
    $after_assoc_user=mysqli_fetch_assoc($user_query);
    if(password_verify($password, $after_assoc_user['password'])){
      $_SESSION['bowser-control']='thik ase';
      $_SESSION['user_id']=$after_assoc_user['id'];
    header('location:admin.php');
   
    }else{
       $_SESSION['wrong-err']='wrog passwprd';
       header('location:login.php'); 
    }

}

else{
$_SESSION['invalaid-err']='invailid email';
header('location:login.php');
}




?>