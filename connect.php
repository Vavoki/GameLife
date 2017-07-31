<?php
$host = 'localhost'; // адрес сервера 
$database = 'GameLife'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
mysqli_close($link);
?>