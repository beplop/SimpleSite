<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="shortcut icon" href="css/title.jpg" type="image/x-icon">
         <meta charset="utf-8">
         <title>Профиль</title>
         <link rel="stylesheet" href="css/style.css" />
     </head>
     <body>
        <div id="profile_head">
                  <p id="math" align="center">Математический форум</p>
            </div>
        <div id="exp">
             <div id="profile_links"> <p>Навигация:</p>
                                      <a href="index.php">&#8226 Главная</a>
                                      <a href="formulas.php">&#8226 Формулы</a>
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
        <div id="profile_float"> <div align="center">Хамидуллин Артур</div> <div align="center">2019</div>    
     </body>
</html>
