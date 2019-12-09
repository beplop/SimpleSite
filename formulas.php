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
            <br>
            <a href="statya.php">&#8226 Статья</a>
        </div>  
        <div id="bad_big">
                <div align="center">
                    <h1 class="headline">Формулы</h1>
                </div>
                <div id="sqrt">
                	<form action="" method="POST">
                    Найти значения для : ax^2 + bx + c<br>
                    a: <input type="text" name="a"><br>
                    b: <input type="text" name="b"><br>
                    c: <input type="text" name="c"><br>
                    <input type="submit" value="Найти корни">
                    </form>
                    <?php
                    ini_set("display_errors", 0);
                    if(isset($_POST['a'])){ $a = $_POST['a']; }
                    if(isset($_POST['b'])){ $b = $_POST['b']; }
                    if(isset($_POST['c'])){ $c = $_POST['c']; }
                    $d = $b*$b - 4*$a*$c;
                    if($d < 0) {
                    echo "Нет решений";
                    } elseif($d == 0) {
                    echo "x=";
                    echo (-$b / 2*$a);
                    } else  {
                    echo "x1 = ";
                    echo ((-$b + sqrt($d)) / (2*$a));
                    echo "<br>";
                    echo "x2 = ";
                    echo ((-$b - sqrt($d)) / (2*$a));
                    }
                    ?>
                </div>
                <div id="tetraidr">
                	    <p> Нахождение площади/объема тетраэдра</p>
                     	<form action="" method="POST">
                     		<p>Длина <input selected value="0" type="number" name="dl"></p>
                     		<p>Ширина <input selected value="0" type="number" name="sh"></p>
                     		<p>Высота <input selected value="0" type="number" name="vi"></p>
                     <select name="option">
                                    <option selected value="1">Площадь</option>
                                    <option value="2">Объем</option>
                                    <option value="3">Площадь и объем</option>
                                </select>
                     <p><input type="submit" value="Получить результат"></p>
                     <p>Результат: <?php
                     ini_set("display_errors", 1);
                     error_reporting(E_ERROR | E_WARNING | E_PARSE);
                     if(isset($_POST['dl'])){ $dl = $_POST['dl']; }
                     if(isset($_POST['sh'])){ $sh = $_POST['sh']; }
                     if(isset($_POST['vi'])){ $sh = $_POST['vi']; }
                    if($_POST["option"] == "1"){
                        $S=$dl*$sh;
                            echo "<div>S=$S</div>";
                        }
                        if($_POST["option"] == "2"){
                            $V=$dl*$sh*$vi;
                            echo "<div>V=$V</div>";
                        } 
                        if($_POST["option"] == "3"){
                           $S=$dl*$sh;
                            $V=$dl*$sh*$vi;
                            echo "<div>S=$S V=$V</div>";
                        }
                    ?>
                </div>
                <div id="calc"> 
                           <p>Мини-калькулятор</p>
                             <form action="" method="POST">
                        	<p>Введите число:<input type="text" value="0" name="smth" id="smth"></p>
                        	<p>Выберите операцию:
                        	<select name="choice" id="choice">
                        		<option>Квадрат</option>
                        		<option>Куб</option>
                        		<option>Корень</option>
                        	</select>
                        	</p>
                        	<input type="submit" value="Получить результат">
                        	</form>
                        	<?php
                        	    ini_set("display_errors", 1);
                     error_reporting(E_ERROR | E_WARNING | E_PARSE);
                        		$var1 = $_POST['smth'];
                        		$var2 = $_POST['choice'];
                        		echo "<br><br>Результат: ";
                        		if ($var2 == "Квадрат"){
                        			echo $var1 ** 2;
                        		}elseif ($var2 == "Куб"){
                        			echo $var1 ** 3;
                        		}elseif ($var2 == "Корень"){
                        			echo sqrt($var1);
                        		}
                        	?>
                </div>
        </div>
        <div id="bad_float"> <div align="center">Хамидуллин Артур</div> <div align="center">2019</div>
                <div align="center"> <a href="https://vk.com/beplop"><img id="vk" src="css/vk.png"></a></div>
        </div>
    </body>
</html>
