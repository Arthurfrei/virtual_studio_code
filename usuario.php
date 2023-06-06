<?php

 
include("conexao.php"); 
?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Nome</td> 
          <td>login</td> 
          <td>senha</td>
          <td>Ação</td> 
        </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['usu_nome']; ?></td>
          <td><?php echo $dado['usu_login']; ?></td> 
          <td><?php echo $dado['usu_senha']; ?></td> 
          <td><?php echo date('d/m/Y', strtotime($dado['usu_datadecadastro'])); ?></td> 
          <td> 
            <a href="usu_editar.php?nome=<?php echo $dado['usu_nome']; ?>">Editar</a> 
            <a href="usu_excluir.php?nome=<?php echo $dado['usu_nome']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>
