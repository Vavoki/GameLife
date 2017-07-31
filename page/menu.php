<? session_start ();?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameLife</title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        <script src="style/js/script.js"></script>
        <script>
            $(document).ready(function()
            {$("#save").click(function()
            {$('#messageShow').hide();
            var loginReg =$("#loginReg").val();
            var pass =$("#pass").val();
            var email =$("#email").val();
            var error="";       
            if(loginReg.length<5)
                error = "Логин должен состоять не менее чем из 5 символов";
            else if(pass.length<8)
                error = "Пароль должен состоять не менее чем из 8 символов";
            if(error !="")
                {
                    $('#messageShow').html(error+"<div class=''clear><br></div>");
                     $('#messageShow').show();
                    return false;
                }
                              
                $.ajax({
                    url:'/ajax/register.php',
                    type: 'POST',
                    cache: false,
                    data:{'loginReg':loginReg,'pass':pass,'email':email},
                    success: function(data){
                      $('#messageShow').html(data+"<div class=''clear><br></div>");
                      $('#messageShow').show();
                    
                          
                        
                    }
                }) 
                            });
                              
                              });
            
            </script>
         <script>
            $(document).ready(function()
            {$("#aut").click(function()
            {$('#messageShowAUT').hide();
            var loginAut =$("#loginAut").val();
            var passAut =$("#passAut").val();               
                $.ajax({
                    url:'/ajax/authorization.php',
                    type: 'POST',
                    cache: false,
                    data:{'loginAut':loginAut,'passAut':passAut,},
                    success: function(data){
                      $('#messageShowAUT').html(data+"<div class=''clear><br></div>");
                      $('#messageShowAUT').show();
                     
                    }
                    
                });
                         });
                           
                              }) ;
            
            </script>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
              <a class="navbar-brand" href="index.php">GameLife</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Матчи</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="teams.php">Команды</a></li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Найти">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <? if($_SESSION['login']!="logIN"): ?>
                <li>    
                <!-- Кнопка для открытия модального окна -->
                <a data-toggle="modal" data-target="#myModal1">
                  Регистрация
                </a>
                    
                    
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Заголовок модального окна -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title" id="myModalLabel"><img src="LogoReg_Vhod.png">Регистрация</h4>
                     </div>
                      <!-- Основная часть модального окна, содержащая форму для регистрации -->
                      <div class="modal-body">
                        <!-- Форма для регистрации -->
                    <form role="form" class="form-horizontal">
                      <!-- Блок для ввода логина -->
                        <div id="messageShow"></div>
                      <div class="form-group has-feedback">
                        <label for="login" class="control-label col-xs-3">Логин:</label>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                            <input type="text" class="form-control" required="required" id="loginReg" pattern="[A-Za-z]{6,}">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                         <div class="form-group has-feedback">
                        <label for="login" class="control-label col-xs-3">Пароль:</label>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>         
                            <input type="password" class="form-control" required="required" id="pass">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                        
                      <!-- Блок для ввода email -->
                      <div class="form-group has-feedback">
                        <label for="email" class="control-label col-xs-3">Email:</label>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" class="form-control" required="required" id="email">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                          <!-- Конец блока для ввода email-->
                        </form>
                      </div>
                      <!-- Нижняя часть модального окна -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                        <button id="save" type="button" class="btn btn-primary">Регистрация</button>
                      </div>
                    </div>
                  </div>
                </div>                  
                </li>
                <li>
                <!-- Кнопка для открытия модального окна -->
                <a data-toggle="modal" data-target="#myModal">
                  Вход
                </a>
                    
                    
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Заголовок модального окна -->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title" id="myModalLabel"><img src="LogoReg_Vhod.png">Вход</h4>
                     </div>
                      <!-- Основная часть модального окна, содержащая форму для регистрации -->
                      <div class="modal-body">
                        <!-- Форма для регистрации -->
                          
                    <form role="form" class="form-horizontal">
                      <!-- Блок для ввода логина -->
                      <div id="messageShowAUT"></div>
                      <div class="form-group has-feedback">
                        <label for="login" class="control-label col-xs-3">Логин:</label>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                            <input type="text" class="form-control" required="required" id="loginAut" pattern="[A-Za-z]{6,}">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                         <div class="form-group has-feedback">
                        <label for="login" class="control-label col-xs-3">Пароль:</label>
                        <div class="col-xs-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>         
                            <input type="password" class="form-control" required="required" id="passAut">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                          <!-- Конец блока для ввода email-->
                        </form>
                      </div>
                      <!-- Нижняя часть модального окна -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                        <button id="aut" type="button" class="btn btn-primary">Войти</button>
                      </div>
                    </div>
                  </div>
                </div>  
                  </li>
                  <? endif; ?> 
                  <? if($_SESSION['login']=="logIN"):?>
                  <li><a>Добро пожаловать, <? echo $_SESSION['log'];?></a></li>
                  <li><a href="logout.php">Выйти</a></li>
                  <? endif; ?>
              </ul>
            </div>
          </div>
      </nav>
    </body>
</html>