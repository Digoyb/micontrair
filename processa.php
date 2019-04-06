<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enviando email..</title>
</head>
<body>
    <?php
            $empresa = $_POST['empresa'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            $headers = 'From: '. $nome;
            $corpoemail = 'Fale Conosco - Cotação Micontrair

                Empresa: ' .$empresa.'
                Nome: ' .$nome.'
                Telefone: ' .$telefone.'
                E-mail: ' .$email.'
                Mensagem: '.$msg.' ';
    
        if(mail("digoh_straight@hotmail.com", "Fale Conosco", $corpoemail, $headers)){
            
            echo "<script>alert('Mensagem enviada com sucesso!');</script>";
            header("Location: index.php");
        }
        else{
            echo "<script>alert('Erro ao enviar a mensagem, tente diretamente pelo digoh_straight@hotmail.com');</script>";
        }
        
    ?>
</body>
</html>