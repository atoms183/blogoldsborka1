<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TECHNICAL-BLOG</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

   
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
   body { 
       
    background-image: url(images/11.jpg); 
   background-attachment: fixed; 
   }
  </style>
  </head>
  <body>
             
         <div class="loader">
		<div class="loader_inner"></div>
	</div>

               <div class="navbar-wrapper">
      <div class="container-fluid">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">MyBlog</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"> &nbsp;главная</a></li>
                <li><a href="#about">  о нас</a></li>
                <li><a href="#contact"> контакты</a></li>
                 <li><a href="#about"> Раздел</a></li>
                  <li><a href="#about"> Раздел</a></li>
                      <li><a href="#about">Раздел</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        
        </div>

      </div>
    </div>
      
 
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Войдите в учетную запись</h4>
      </div>
      <div class="modal-body">
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Введите данные для входа</h2>

  <form class="login-container" action="index.php" method="post">

     <p><input type="email" name="login"  required placeholder="Логин"></p>
  
    <p><input type="password" name="password" required placeholder="Пароль"></p>

    <p><input type="submit" name="Войти"></p>
  </form>
</div>
</div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

      <div class="container-fluid container-fluid-fixed-top">
          <div class="row">
           <div class=" col-md-12 jumbotron">    
           <div class="text-center">
               <h1>TECHNICAL-BLOG</h1>
               <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit,incididunt ut labore et dolore magna aliqua.</h2>
                     <div id="lastmain">
     <a href="#myModal" class="main-action" data-toggle="modal" data-target="#myModal">Войти в учетную запись</a>
    </div>
           </div>
              
              </div>  
          </div>
          
      </div>
      
 
     <div class="container">
    <div class="row">
  <div class=" col-md-12">
    <div class="thumbnail">
<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
      <div class="caption">
       <h3>Заголовок публикации</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident.</p>
        <p><a href="#" class="btn btn-success" role="button">Подробнее</a> 
      </div>
    </div>
  </div>
</div>
</div>
  
      
       <div class="container">
    <div class="row">
  <div class=" col-md-12">
    <div class="thumbnail">
<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
      <div class="caption">
        <h3>Заголовок публикации</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, s magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident,unt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="#" class="btn btn-success" role="button">Подробнее</a> 
      </div>
    </div>
  </div>
</div>
</div>
  
           <div class="container">
    <div class="row">
  <div class=" col-md-12">
    <div class="thumbnail">
<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
      <div class="caption">
     <h3>Заголовок публикации</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="#" class="btn btn-success" role="button">Подробнее</a> 
      </div>
    </div>
  </div>
</div>
</div>
  
           <div class="container">
    <div class="row">
  <div class=" col-md-12">
    <div class="thumbnail">
<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
      <div class="caption">
        <h3>Заголовок публикации</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="#" class="btn btn-success" role="button">Подробнее</a> 
      </div>
    </div>
  </div>
</div>
</div>
  
           
 		 <section class="footer">
      

      <div class="menu-footer">
        <a href="/"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
      <div class="copyright">© 2016 TECHNICAL-BLOG</div>

    </section>  


<?php $connection = mysqli_connect('localhost', 'root', '', 'reg') or die(mysqli_error()); // Соединение с базой данных ?>

<?php if (isset($_POST['submit'])) // Отлавливаем нажатие кнопки "Отправить"
{
if (empty($_POST['login'])) // Если поле логин пустое
{
echo '<script>alert("Поле логин не заполненно");</script>'; // То выводим сообщение об ошибке
}
elseif (empty($_POST['password'])) // Если поле пароль пустое
{
echo '<script>alert("Поле пароль не заполненно");</script>'; // То выводим сообщение об ошибке
}
else  // Иначе если все поля заполненны
{    
$login = $_POST['login']; // Записываем логин в переменную 
$password = $_POST['password']; // Записываем пароль в переменную           
$query = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); // Формируем переменную с запросом к базе данных с проверкой пользователя
$result = mysqli_fetch_array($query); // Формируем переменную с исполнением запроса к БД 
if (empty($result['id'])) // Если запрос к бд не возвразяет id пользователя
{
echo '<script>alert("Неверные Логин или Пароль");</script>'; // Значит такой пользователь не существует или не верен пароль
}
else // Если возвращяем id пользователя, выполняем вход под ним
{
$_SESSION['password'] = $password; // Заносим в сессию  пароль
$_SESSION['login'] = $login; // Заносим в сессию  логин
$_SESSION['id'] = $result['id']; // Заносим в сессию  id
echo '<div align="center">Вы успешно вощли в систему: '.$_SESSION['login'].'</div>'; // Выводим сообщение что пользователь авторизирован        
}     
}   
} ?>

<?php if (isset($_GET['exit'])) { // если вызвали переменную "exit"
unset($_SESSION['password']); // Чистим сессию пароля
unset($_SESSION['login']); // Чистим сессию логина
unset($_SESSION['id']); // Чистим сессию id
} ?>

<?php if (isset($_SESSION['login']) && isset($_SESSION['id'])) // если в сессии загружены логин и id
{
echo '<div align="center"><a href="index.php?exit">Выход</a></div>'; // Выводим нашу ссылку выхода
} ?>

<?php if (!isset($_SESSION['login']) || !isset($_SESSION['id'])) // если в сессии не загружены логин и id
{
//echo '<div id="lastmain">
//      <a href="reg.php" class="main-action">Создать &nbsp;<i class="fa fa-smile-o" aria-hidden="true"></i> &mdash; учетную запись</a>
//    </div>'; // Выводим нашу ссылку регистрации
} ?>





     
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		 <script src="js/main.js"></script>    
  </body>
</html>
