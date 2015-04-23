<?php

  $nome = $_POST['Nome'];
  $email = $_POST['Email'];
  $senha = $_POST['Senha'];

  $diretorio = "uploads/";
  $arquivo = $diretorio . basename($_FILES["arquivo"]["name"]);
  $arquivo_tmp =

  // Check if image file is a actual image or fake image
  if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo)) {
        die('Ocorreu um erro ao enviar arquivo.')
  }

  $ip = 'localhost';
  $user = 'root'
  $password = ''
  $banco = 'tecweb'

  mysql_connect($ip, $user, $password);
  mysql_select_db($banco);

  mysql_query("INSERT INTO $banco('nome', 'email', 'senha', 'caminho_arquivo') VALUES('$nome','$email','$senha', '$arquivo')")
    or die ('Ocorreu um erro ao inserir usuário.');

  $resultado = "usuario adicionado com sucesso!";

 ?>

 <html>
   <head>
     <title>Cadastro de usuários</title>
   </head>
   <body>
     <h1><?php echo $resultado; ?></h1>
   </body>
 </html>
