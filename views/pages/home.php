<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
<style type="text/css">
    input, textarea{
        width: 100%;
    }
    textarea{
        height: 120px;
    }
</style>



<?php
    if(isset($_POST["quirguizia"])){


        $email = $_POST["email"];
        $pergunta = $_POST["pergunta"];
        $token = md5(uniqid());
        $sql = \MySql::conectar()->prepare("INSERT INTO chamados VALUES (null, ?,?,?)");
        $sql->execute(array($email, $pergunta, $token));

        //Enviar email para usuário dizendo que o chamado foi aberto, boa sorte se funcionar!
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->SMTPDebug = 0;  
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Seu chamado foi aberto';
            $url = BASED.'chamado?token='.$token;
            $informacoes = 'Olá, seu chamado foi criado com sucesso <br /> Utilize o link abaixo para interagir:<br />
            <a href="'.$url.'">Acessar chamado!</a>
            ';
            $mail->Body    = $informacoes;
            //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        //Fim do email
        echo '<script>alert("Seu chamado foi aberto com sucesso! Você receberá no email as informações para interagir")</script>';
    }
?>

<h2>Abrir calefação</h2>
<form method="post">
    <input type="email" name="email" placeholder="Seu email...">
    <br />
    <br />
    <textarea name="pergunta" placeholder="Qual sua pergunta?"></textarea>
    <br />
    <br />
    <input type="submit" name="quirguizia" value="Enviar!">

</form>
</body>
</html>





