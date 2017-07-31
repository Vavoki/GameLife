<? session_start ();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameLife</title>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
  <style>
	
	.notpodcherk /* у ссылки с классом notpodcherk не будет подчеркивания по умолчанию */ 
	{ 
	text-decoration: none
	}  
	.notpodcherk:hover 
	{ 
	text-decoration: none 
	}  
</style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/script.js"></script>
    <?php include_once "page/menu.php"?>
    <?php include_once "page/newsPage.php"?>
  </body>
</html>