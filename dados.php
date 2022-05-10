<?php
// A variável global $_POST permite acessar os dados enviados com o método POST pelo nome
   // Para acessar os dados enviados com o método GET, você pode usar $_GET
  $say = htmlspecialchars($_POST['say']);
  $to  = htmlspecialchars($_POST['to']);

  echo  $say, ' ', $to;
?>
