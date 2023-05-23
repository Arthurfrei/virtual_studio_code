<?php
$conexão = mysqli_connect('localhost', 'root', '', 'bancoA3', 3306);

if(!$conexão){
    Die ('Banco de dados em manutenção');
}else{
    echo "conectado";
}
?>
