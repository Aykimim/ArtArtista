
<!DOCTYPE HTML>
 <html>
   <head>
    <title>Exemplo</title>
    </head>
   <body>
<?
 
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

?>










// A variável global $_POST permite acessar os dados enviados com o método POST pelo nome
   // Para acessar os dados enviados com o método GET, você pode usar $_GET
 // $nome = htmlspecialchars($_POST['nome']);
//$email = htmlspecialchars($_POST['email']);
//$telefone = htmlspecialchars($_POST['telefone']);
//  $msg  = htmlspecialchars($_POST['msg']);
// echo  $say, ' ', $to;

