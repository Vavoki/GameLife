<? session_start ();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameLife</title>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
  </head>
  <body> 
    <div class="row">
      <div class="col-md-7">
          <h4 class="center">Предстоящие матчи на сегодня</h4>
          <div class="border">
          <?php 
          include_once ('parser.php');
          ?>
          </div>
        </div>
      <div class="col-md-4 col-md-offset-1">
          <div class="row">
              <img src="Logo.png">
          </div>
          <div class="row">
              <div class="col-md-12">
                    <h4 class="center"><a href=news.php>Смотреть новости</a></h4>
              </div>
          </div>
        </div>
    </div>
      <div class="row">
      <div class="col-md-7">
       <div class="Comment">
           <h4 class="center">Коментарии</h4>
            <?
          if($_SESSION['login']!="logIN")
          {
              $link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
            $query="SELECT * FROM Commends";
            $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
             $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                while($myrow=mysqli_fetch_array($result))
                {	
                   echo "<div class='AllEmentsCommenr'><div class='titleC'><h4><img class='userImg' src ='user.png'>$myrow[author]</h4></div>";
                   echo "<div class='TextC'><p class='Comments'>$myrow[text]</p></div>";
                   echo "<div class='DateC'><p class='date'>$myrow[date]</p></div></div>";
                 
                }
          }
        
        ?>
           <? if($_SESSION['login']=="logIN"):?>
            <?   $link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
            $query="SELECT * FROM Commends";
            $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
             $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                while($myrow=mysqli_fetch_array($result))
                {	
                   echo "<div class='AllEmentsCommenr'><div class='titleC'><h4><img class='userImg' src ='user.png'>$myrow[author]</h4></div>";
                   echo "<div class='TextC'><p class='Comments'>$myrow[text]</p></div>";
                   echo "<div class='DateC'><p class='date'>$myrow[date]</p></div></div>";
                 
                } 
           
           ?>
                <form action="ajax/add_Comment.php" method="post">
                    <input type='text' placeholder="Введите комментарий" name='text'>
                    <input type='submit'>
                </form>
          
           <? endif;?>
          </div>
        </div>
    </div>
</body>
</html>