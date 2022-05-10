<?php
// A variável global $_POST permite acessar os dados enviados com o método POST pelo nome
   // Para acessar os dados enviados com o método GET, você pode usar $_GET
  $nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
  $msg  = htmlspecialchars($_POST['msg']);

  echo  $say, ' ', $to;
?>
