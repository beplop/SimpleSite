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
            <div id="bad_users">
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
        <form name="comment" action="comment.php" method="post">
  <p>
    <p>Вы:<?php echo $_SESSION['username']; ?></p>
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="10"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="1" />
    <input type="submit" value="Отправить" />
  </p>
</form>

<?php
  $page_id = 1;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "ralibu94", "comments");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r( "<b>".$row["name"]."</b>: ".$row["text_comment"]); //Вывод комментариев
    echo "<br />";
  }
?>
        </div>
        <div id="bad_float"> <div align="center">Хамидуллин Артур</div> <div align="center">2019</div>
                <div align="center"> <a href="https://vk.com/beplop"><img id="vk" src="css/vk.png"></a></div>
        </div>
    </body>
</html>