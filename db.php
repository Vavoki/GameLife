<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="GameLife";
$connection=mysqli_connect($host,$user,$password) or die("Error");
$select_bd=mysqli_select_db($connection,$db) or die ("Error");
?>