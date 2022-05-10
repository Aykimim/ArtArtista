
<?php
 
    if (isset($_POST["vai"])){
     <a <button onclick="alert('Formulário Foi enviado pelo método ')">Enviar</button> <a href="#"></a>
        echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
   
        $mensagem = $_POST["mensagem"];
        
         echo "<p>Olá, ".$nome."</p>"; 
        
        echo "<p>Seu email é: ".$email."</p>"; 

        echo "<p>Seu telefone é: ".$telefone."</p>"; 

        echo "<p>Sua mensagem é:<br/>".$mensagem."</p>"; 



   # alterar a variavel abaixo colocando o seu email

$destinatario = "eykimim@hotmail.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $mensagem, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:home.html");
     
    }












