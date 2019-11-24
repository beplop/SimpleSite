<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Профиль</title>
         <link rel="stylesheet" href="css/style.css" />
     </head>
     <body>
        <div id="profile_head">
                  <p id="math" align="center">Математический форум</p>
            </div>
        <div id="exp">
             <div id="profile_links"> <a href="index.php">&#8226 Главная</a>
             </div>
            <div class="form">
             <p>Профиль</p>
             <p>Добро пожаловать,<?php echo $_SESSION['username']; ?>!</p>
             <p>Ваш рейтинг: 
                <?php
                $rate=0;
                echo "$rate"; 
                ?>   
             </p>
             <a href="logout.php">Выйти</a>
             </div>
        </div>    
     </body>
</html>
