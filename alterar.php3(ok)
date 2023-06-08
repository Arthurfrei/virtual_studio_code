<?php
session_start();
include_once ('conexao.php');
?>

<html>
<head>
 <meta....>
 <meta....>
 <link rel = "stylesheet" type = "text/css" href = "estilo.css">
</head>
    <body>
        <center>
        <h1>alterar senha</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
       $result_msg_cont = "SELECT * FROM login WHERE login";


        ?>
      <form method="POST" action="senha.php">
          <label>login: </label>
          <input type="text" name="login" placeholder="Inserir seu login"><br><br>

         <label>nova senha: </label>
         <input type="text" name="nova senha" placeholder="Inserir nova senha"><br><br>

         <label>confirmar senha: </label>
         <input type="text" name="confirmar senha" placeholder="confirmar nova senha"><br><br>

         <input name="SendEditCont" type="submit" value="Editar">

    </center>
    </body>
</html>
