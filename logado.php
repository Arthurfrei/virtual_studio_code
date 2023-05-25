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


