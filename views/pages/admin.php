<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['responder_novo_chamado'])){
        $token = $_POST['token'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $sql = \MySql::conectar()->prepare('INSERT INTO interacao_chamado VALUES (null, ?,?,?,1)');
        $sql->execute(array($token, $mensagem, 1));
        //Envio de email
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
            $mail->Subject = 'Nova interação no chamado: '.$token;
            $url = BASED.'chamado?token='.$token;
            $informacoes = 'Uma nova interação foi feita no seu chamado! <br /> Utilize o link abaixo para interagir:<br />
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
        //Fim do Email
        echo '<script>alert("Você respondeu o usuário!")</script>';
    } else if(isset($_POST['responder_nova_interacao'])){
        $mensagem = $_POST['mensagem'];
        $token = $_POST['token'];
        $email = \MySql::conectar()->prepare("SELECT * FROM chamados WHERE token = ?");
        $email->execute(array($token));
        $email = $email->fetch()['email'];
        \MySql::conectar()->exec("UPDATE interacao_chamado SET statusa = 1 WHERE id = '$_POST[id]'");

        $sql = \MySql::conectar()->prepare('INSERT INTO interacao_chamado VALUES (null, ?,?,1,1)');

        $sql->execute(array($token, $mensagem));

        //Envio de email
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
            $mail->Subject = 'Nova interação no chamado: '.$token;
            $url = BASED.'chamado?token='.$token;
            $informacoes = 'Uma nova interação foi feita no seu chamado! <br /> Utilize o link abaixo para interagir:<br />
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
        //Fim do Email

        echo '<script>alert("Você respondeu o usuário!")</script>';
    }
?>

<style type="text/css">
    textarea, input{
        width: 100%;
    }
    textarea{
        height: 120px;
    }
</style>

<h2>Novos chamados: </h2>
<?php
    $pegariaChamados = \MySql::conectar()->prepare("SELECT * FROM chamados ORDER BY id DESC");
    $pegariaChamados->execute();
    $pegariaChamados = $pegariaChamados->fetchAll();
    foreach ($pegariaChamados as $key => $value) {
        $verificationInteracao = \MySql::conectar()->prepare("SELECT * FROM interacao_chamado WHERE id_chamado = '$value[token]'");
        $verificationInteracao->execute();
        if($verificationInteracao->rowCount() >= 1)
            continue;
?>
    <h2> <?php echo $value['pergunta'];?></h2>
    <form method="post">
        <textarea name="mensagem" placeholder="Sua resposta..."></textarea>
        <br />
        <br />
        <input type="submit" name="responder_novo_chamado" value="Responder!">
        
        <input type="hidden" name="token" value="<?php echo $value['token'];?>">
        <input type="hidden" name="email" value="<?php echo $value['email'];?>">
    </form>
<?php } ?>
<hr>

<h2>Últimas interações: </h2>

<?php
    $pegariaChamados = \MySql::conectar()->prepare("SELECT * FROM interacao_chamado WHERE admina = -1 AND statusa = 0 ORDER BY id DESC");
    $pegariaChamados->execute();
    $pegariaChamados = $pegariaChamados->fetchAll();
    foreach ($pegariaChamados as $key => $value) {
?>
    <h2><?php echo $value['mensagem'];?></h2>
    <p><a href="<?php echo BASED ?>chamado?token=<?php echo $value['id_chamado']?>">Clique aqui</a> para visualizar este chamado!</p>
    <form method="post">
        <textarea name="mensagem" placeholder="Sua resposta..."></textarea>
        <br />
        <br />
        <input type="hidden" name="id" value="<?php echo $value['id']?>">
        <input type="submit" name="responder_nova_interacao" value="Responder!">
        <input type="hidden" name="token" value="<?php echo $value['id_chamado'];?>">
    </form>
<?php } ?>