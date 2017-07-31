<?php
$url = 'http://gamelife/index.php';
$loginAut = htmlspecialchars($_POST['loginAut']);
$passAut =htmlspecialchars($_POST['passAut']);
session_start();
$link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
$query="SELECT * FROM users WHERE (log='$loginAut')";
$result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
$user = mysqli_fetch_array($result);
if(empty($user['log'])) {
echo "Данный логин не найдет";
}
else
{
    if($user['pas'] == $passAut)
    {
        $_SESSION['login']="logIN";
        $_SESSION["log"]=$loginAut;
        $_SESSION['USER_LOGIN_IN']= 1;
        echo "Вы успешно авторизировались пройдите по<a href='index.php'> ссылке</a>.";
    }
    else
    {
        echo "Пароль не верный";
    }
} 
?>