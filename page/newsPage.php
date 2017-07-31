<? session_start() ?>
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
          <div class="articls">
            
         <? $link = new mysqli("127.0.0.1", "root", "", "GameLife", 3306);
            $query ="SELECT `heading`, `img`, `text`, `date` FROM `articles` WHERE 1";
            $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
            while($myrow=mysqli_fetch_array($result))
            {	
               echo "<h4 class='center'>$myrow[heading]</h4>";
               echo "<div class='img-div'><img class='first-img' src='$myrow[img]'></div>";
               echo "<p class='text'>$myrow[text]</p>";

            }
            ?>
          
          </div>
          
      <? if($_SESSION['log']=='Vlad'): ?>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="heading" id="heading"><br><br>
        <input type="text" name="text" id="text"><br><br>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      <? endif; ?>
        </div>
      <div class="col-md-4 col-md-offset-1">
          <div class="row">
              <img src="Logo.png">
          </div>
          <div class="row">
              <div class="col-md-12">
                   
                        
              </div>
          </div>
        </div>
    </div>
</body>
</html>