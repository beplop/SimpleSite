<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Вторая страница</title>
         <link rel="stylesheet" href="css/style.css" />
     </head>
     <body>
         <div class="form">
             <p>Dashboard</p>
             <p>This is another secured page.</p>
             <p><a href="index.php">Home</a></p>
             <a href="logout.php">Logout</a>
         </div>
     </body>
</html>