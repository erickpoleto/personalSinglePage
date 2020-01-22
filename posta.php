<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "erick-poleto@hotmail.com");
        $subject = "Mensagem pagina principal";
        $to = new SendGrid\Email(null, "erick-poleto@hotmail.com");
        $content = new SendGrid\Content("text/html", "Olá, Erick <br><br>mensagem pagina pessoal");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "mensagem enviada com sucesso";
        ?>
    </body>
</html>
