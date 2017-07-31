
<?php
$target_path = 'img/';
$target_path = $target_path . basename( $_FILES['file']['name']); 
move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
$heading = htmlspecialchars($_POST['heading']);
$text =$_POST['text'];
$link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
$query ="INSERT INTO `articles`(`heading`, `img`, `text`) VALUES ('$heading','$target_path','$text')";
$result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
echo "Запись добавлена <a href='news.php'>Новости</a>"

?>
