<?php

  var $email = $_POST['email'];
  var $senha = $_POST['senha'];

  $ip = 'localhost';
  $user = 'root'
  $password = ''
  $banco = 'tecweb'

  mysql_connect($ip, $user, $password);
  mysql_select_db($banco);

  $usuario = mysql_query("SELECT * FROM $banco WHERE email = '$email' and senha ='$senha'")
    or die ('Usuário ou senha incorretos.');

  session_start();
  $_SESSION['usuario'] = $usuario['usuario'];
?>

<html>
  <head>
    <title>Usuário</title>
  </head>
  <body>
    <?php $_SESSION['usuario'] ?>
  </body>
</html>
