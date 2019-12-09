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
            <div id="bad_users" style="margin-left: 1225px">
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
            <br>
            <a href="statya.php">&#8226 Статья</a>
        </div>
         <div id="bad_big">
                <div align="center">
                    <h1 class="headline">Статья</h1>
                </div>
                <div>
                    <?php
                        $con = mysqli_connect("localhost","root","ralibu94","content");
                        $sql = mysqli_query($con, 'SELECT `text` FROM `content`');
                        $result = mysqli_fetch_assoc($sql);
            if ($_SESSION['auth'] == true and $_SESSION['status'] == 10) {       //для админа возможности
    if (isset($_POST["text"])) {
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($con, "UPDATE `content` SET `text` = '{$_POST['text']}' WHERE `ID`={$_GET['red_id']}");
      } 
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($con) . '</p>';
      }
    }

    if (isset($_GET['del_id'])) {
      $sql = mysqli_query($con, "DELETE FROM `content` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p>Запись удалена.</p>";
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($con) . '</p>';
      }
    }
    if (isset($_GET['red_id'])) {
      $sql = mysqli_query($con, "SELECT `text` FROM `content` WHERE `ID`={$_GET['red_id']}");
      $product = mysqli_fetch_array($sql);
    }
  ?>
  <?php 
     echo $result['text'];
   ?>
  <form action="" method="post">
      <textarea name="text" cols="100" rows="50"> <?= isset($_GET['red_id']) ? $product['text'] : ''; ?> </textarea>
      <input type="submit" value="OK">
      <input type="submit" value="Применить изменения">
      <a href="statya.php">Выйти из редактора</a>
  </form>
    <?php
      $sql = mysqli_query($con, 'SELECT `text` FROM `content`');
      while ($result = mysqli_fetch_array($sql)) {
        echo "<a href='?del_id=1'>Удалить</a> <br>" .
             "<a href='?red_id=1'>Изменить</a>" ;
      } }
      else echo $result['text']; //Для обычных юзеров
    ?>
                </div>
         </div>
         <div id="bad_float"> <div align="center">Хамидуллин Артур</div> <div align="center">2019</div>
                <div align="center"> <a href="https://vk.com/beplop"><img id="vk" src="css/vk.png"></a></div>
        </div>
    </body>
</html>  
