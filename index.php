<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Math4YOU</title>
         <link rel="stylesheet" href="css/style.css" />
     </head>
     <body>
            <div class="head">
                  <p id="math" align="center">Математический форум</p>
            </div>
            <div class="user">
             <p>Пользователь: <?php echo $_SESSION['username']; ?></p>
             <p><a href="dashboard.php">Ваш профиль</a></p>
             <a href="logout.php">Выйти</a>
            </div>
            <div class="links">ссылки</div>
            <div class="big">основная инфа</div>
            <div class="float">подвал</div>
     </body>
</html>
