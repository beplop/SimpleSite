<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
    <head>
    	<link rel="shortcut icon" href="css/title.jpg" type="image/x-icon">
    	<link rel="stylesheet" href="css/style.css" />
	    <title>Формулы</title>
    </head>
    <body>
    	<div>           
            <div class="head">
                <p id="math" align="center">Математический форум</p>
            </div>
            <div id="bad_users" style="margin-left: 1236px">
                <p>Пользователь: <?php echo $_SESSION['username']; ?></p>
                <p><a href="dashboard.php">Ваш профиль</a></p>
                <a href="logout.php">Выйти</a>
            </div>
        </div>
        <div class="links">
        	<p>Навигация:</p>
            <a href="index.php">&#8226 Главная</a> <br>
            <a href="formulas.php">&#8226 Формулы</a>
            <a href="game.php">&#8226 Игра</a>
        </div>
         <div id="bad_big">
                <div align="center">
                    <h1 class="headline">Статья</h1>
                </div>
         </div>
         <div id="bad_float"> <div align="center">Хамидуллин Артур</div> <div align="center">2019</div>
                <div align="center"> <a href="https://vk.com/beplop"><img id="vk" src="css/vk.png"></a></div>
        </div>
    </body>
</html>  