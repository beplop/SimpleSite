<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Авторизация</title>
         <link rel="stylesheet" href="css/style.css" />
         <link rel="shortcut icon" href="css/title.jpg" type="image/x-icon">
     </head>
     <body>
            <?php
                 require('db.php');
                 session_start();
                 if (isset($_POST['username'])){
                 $username = stripslashes($_REQUEST['username']);
                 $username = mysqli_real_escape_string($con,$username);
                 $password = stripslashes($_REQUEST['password']);
                 $password = mysqli_real_escape_string($con,$password);
                        $query = "SELECT * FROM `users` WHERE username='$username'
                 and password='".md5($password)."'";
                 $result = mysqli_query($con,$query) or die(mysql_error());
                 $rows = mysqli_num_rows($result);
                        if($rows==1){
                     $_SESSION['username'] = $username;
                     header("Location: index.php");
                     $user = mysqli_fetch_assoc($result);
                     $_SESSION['auth'] = true;
                     $_SESSION['id'] = $user['id'];
                     $_SESSION['login'] = $user['login'];
                     $_SESSION['status'] = $user['status'];
                     $_SESSION['rate'] = $user['rate'];  
                         }else{
                 echo "<div class='form'>
                 <h3>Имя пользователя или пароль некорректны.</h3>
                 <br/>Нажмите сюда для <a href='login.php'>Авторизации</a></div>"; }
                    }else{
             ?>
             <div class="form">
                 <h1>Авторизация</h1>
                 <form action="" method="post" name="login">
                      <input type="text" name="username" placeholder="Никнейм"required />     
                      <input type="password" name="password" placeholder="Пароль" required />       
                      <input name="submit" type="submit" value="Войти" />       
                 </form>
                 <p>Еще не зарегистрированы? <a href='registration.php'>Зарегистрируйтесь здесь</a></p>
             </div>
          <?php } ?>
     </body>
</html>
