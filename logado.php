<?php
include ('conexão.php');
$login = isset($_POST['login'])?$_POST['login']:'';
$senha = isset($_POST['senha'])?$_POST['senha']:'';

if($login == "aluno" && $senha == "FPB"){
    echo "Dados corretos";
}else{
    echo "Dados errados";
}

?>


------------------------------------------
<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "select nome, login, senha from login where login = '$login' and senha = '$senha'";
$query = mysqli_query ($conexao, $select);
$dados = mysqli_fetch_row ($query);

if ($login == $dados[1] && $senha == $dados[2]){
    echo "conectado";
}else{
    echo "dados inválidos";
}

?>
