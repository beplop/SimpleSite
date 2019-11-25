<?php
include("auth.php");
  /* Принимаем данные из формы */
  $name = $_SESSION['username'];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $mysqli = new mysqli("localhost", "root", "ralibu94", "comments");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>