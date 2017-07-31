<?
session_start();
$user = $_SESSION['log'];
$text = $_POST['text'];
$link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
$query ="INSERT INTO `Commends`(`author`, `text`) VALUES ('$user','$text')";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
   header('Location: http://gamelife/index.php');
    

?>