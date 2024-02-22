<?php
session_start();

if(!isset($_SESSION['bowser-control'])){
    header('location:login.php');
    }
?>