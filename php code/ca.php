<?php
session_start();
$searchq=$_GET['search'];
$_SESSION['search']=$searchq;
echo "<script>";
 echo 'window.location.href="car1.php";';
echo "</script>";
?>