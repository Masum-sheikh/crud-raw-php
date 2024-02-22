<?php
 session_start();
require  'bd.php';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_hass=password_hash($password,PASSWORD_DEFAULT);
$gender=$_POST['gender'];
$flag= false;
if(!$name){
    $flag=true;
    $_SESSION['name-err']='oi beta name de';
   
}
if(!$email){
    $flag=true;
    $_SESSION['email-err']='oi beta name de';
   
}else{
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $flag=true;
    $_SESSION['email-err']='RIGHT EMAIL DEN';
  }
}
if(!$password){
    $flag=true;
    $_SESSION['password-err']='oi beta password de';
   
}else{
    $uper=preg_match('@[A-Z]@',$password);
    $lower=preg_match('@[a-z]@',$password);
    $number=preg_match('@[0-9]@',$password);
    $spsl=preg_match('@[#,%,^,&,*,$,!]@',$password);
    if(!$uper || !$lower || !$number || !$spsl || strlen($password) < 8){
        $flag=true;
        $_SESSION['password-err']='please use uper or lower or number and spacail charector';  
    }
}
if(!$gender){
    $flag=true;
    $_SESSION['gender-err']='please your gender';
   
}

if($flag){
    
    header('location:register.php');
}
else
{
    $select= "SELECT COUNT(*) as paisi FROM users WHERE email='$email'";
    $select_quiry=mysqli_query($db_connect,$select);
   $after_asssoc=mysqli_fetch_assoc( $select_quiry);

   if($after_asssoc['paisi']==0){
      $inser="INSERT INTO users(name, email, password, gender)VALUES('$name','$email','$password_hass','$gender')";
       mysqli_query($db_connect,$inser);
      $_SESSION['success-err']='registetion successfully';
     header('location:register.php');
   }else{
    $_SESSION['exit-err']='your email allready exit';
    header('location:register.php');
   }


   
}
?>
