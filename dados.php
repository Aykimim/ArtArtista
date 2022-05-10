

<?php
 
    if (isset($_POST["acao"])){
        echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
        $nome=$_POST["nome"];
        $telefone=$_POST["telefone"];
        $email=$_POST["email"];
   
        $msg=$_POST["mensagem"];
        
         echo "<p>Olá, ".$nome."</p>"; 
        
        echo "<p>Seu email é: ".$email."</p>"; 

   echo "<p>Seu telefone é: ".$telefone."</p>"; 


   echo "<p>Sua mensagem é:<br/>".$mensagem."</p>"; 
} 

?>
   










// A variável global $_POST permite acessar os dados enviados com o método POST pelo nome
   // Para acessar os dados enviados com o método GET, você pode usar $_GET
 // $nome = htmlspecialchars($_POST['nome']);
//$email = htmlspecialchars($_POST['email']);
//$telefone = htmlspecialchars($_POST['telefone']);
//  $msg  = htmlspecialchars($_POST['msg']);
// echo  $say, ' ', $to;

