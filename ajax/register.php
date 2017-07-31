<?php

$loginReg = htmlspecialchars($_POST['loginReg']);
$pass =htmlspecialchars($_POST['pass']);
$email=htmlspecialchars($_POST['email']);
session_start();
$link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
$query ="INSERT INTO `users`(`name`, `log`, `pas`) VALUES ('$email','$loginReg','$pass')";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
    echo "Вы успешно зарегистрировались";

   
?>