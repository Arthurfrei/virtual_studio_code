<?php
session_start();
include_once('conexao.php');

$SendEditCont = filter_input(INPUT_POST, 'SendEditcont', FILTER_SANITIZE_STRING);
if($SendEditCont){

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_msg_cont = "UPDATE login SET login=:login,senha=:senha";

$update_msg_cont = $conexao->prepare($result_msg_cont);
$update_msg_cont->bindParam(':login', $login);
$update_msg_cont->bindParam(': senha', $senha);


if ($update_msg_cont->execute()){
    $_SESSION['msg'] = "<p>Senha alterada com sucesso</p>";
    hearder("Location: alterar.php");
}else{
    $_SESSION['msg'] = "<p>Senha não foi alterada com sucesso</p>";
    hearder("Location: alterar.php");
}
}
?>
