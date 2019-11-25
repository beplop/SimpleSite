<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Регистрация</title>
         <link rel="stylesheet" href="css/style.css" />
     </head>
    <body>
        <?php
            require('db.php');
            if (isset($_REQUEST['username'])){                  
             $username = stripslashes($_REQUEST['username']);
             $username = mysqli_real_escape_string($con,$username); 
             $email = stripslashes($_REQUEST['email']);
             $email = mysqli_real_escape_string($con,$email);
             $password = stripslashes($_REQUEST['password']);
             $password2 = stripslashes($_REQUEST['password2']);
             $password = mysqli_real_escape_string($con,$password);
             $trn_date = date("Y-m-d H:i:s");
               if (stripslashes($_REQUEST['password'])==stripslashes($_REQUEST['password2'])) {
             $query = "SELECT * FROM `users` WHERE username='$username'
                 and email='$email'";
                 $result = mysqli_query($con,$query) or die(mysql_error());
             $rows = mysqli_num_rows($result);
                        if($rows==1) {echo "<div class='form'>
            <h3>Такой пользователь уже существует.</h3>
            <br/>Нажмите здесь для повторной <a href='registration.php'>Регистрации</a></div>";}
                   
                    $query = "INSERT into `users` (username, password, email, trn_date)
            VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                    $result = mysqli_query($con,$query);
                    if($result){
                        echo "<div class='form'>
            <h3>Вы успешно зарегистрировались.</h3>
            <br/>Нажмите здесь для <a href='login.php'>Авторизации</a></div>";
             }
                 } else echo "<div class='form'>
            <h3>Пароли не совпадают.</h3>
            <br/>Нажмите здесь для повторной <a href='registration.php'>Регистрации</a></div>";}else{
        ?>
        <div class="form">
            <h1>Регистрация</h1>
            <form name="registration" action="" method="post">
                <input type="text" name="username" placeholder="Никнейм" required     />    
                <input type="email" name="email" placeholder="Email" required />    
                <input type="password" name="password" placeholder="Пароль"     required     />
                <input type="password" name="password2" placeholder="Повторите пароль"     required     />    
                <input type="submit" name="submit" value="Зарегистрироваться" />
                <p>Уже зарегистрированы? <a href='login.php'>Авторизуйтесь здесь</a></p>
            </form>
        </div>
        <?php } ?>
    </body>
</html>
