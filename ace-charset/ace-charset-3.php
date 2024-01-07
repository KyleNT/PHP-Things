<?php

##AULA 1 - Sessões
/*
    session_start();
    $_SESSION['nome'] = 'GravityDaze';

    session_write_close();
    sleep(1);
*/

##AULA 2 - Script
/*
$start = microtime(true);

sleep(3);

$end = microtime(true);

echo "o tempo que demorou o script ser executado foi: " . round(($end-$start),3);
*/

##AULA 3 - Excel
#Em outra pasta

##AULA 4 - Login Simultâneo
/*
    session_start();
    $mdb = new PDO('mysql:host=localhost;port=3307;dbname=testes','root','');

    if(isset($_POST['logina']) && !isset($_SESSION['logina'])){
        $_SESSION['logina'] = $_POST['logina'];
        $_SESSION['token'] = uniqid();
        $phs = $mdb->prepare('DELETE FROM logina WHERE logina = ?');
        $phs->execute(array($_SESSION['logina']));
        $phs = $mdb->prepare("INSERT INTO logina VALUES (null,?,?)");
        $phs->execute(array($_SESSION['logina'], $_SESSION["token"]));
    }

    if(!isset($_SESSION['logina'])){
        echo '<h2>Realize seu login</h2>';
        echo '<form method="post">
        <input type="text" name="logina" placeholder="Login.." />
        <input type="submit" name="submit" />
        </form>';
    } else {
        //Verificar se não exitie outra sessão em progresso!
        $login = $_SESSION['logina'];
        $token = $_SESSION['token'];
        $check = $mdb->prepare("SELECT `id` FROM logina WHERE logina = ? AND token = ?");
        $check->execute(array($login,$token));

        
        if($check->rowCount() == 1){
            echo "Logado como " . $_SESSION['logina'];   
        } else{
            echo 'Oops, você vai ser deslogado, pois encontramos outro usuário logado em sua conta. ';
            session_destroy();
        }

    }
    //session_destroy();
    */

    ##AULA 5
    #ob_start();

    ##AULA 6
    #EMAIL
?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Guerra Anti</p>
    <?php 
        #header('location: https://www.google.com');
        //echo '<script>location.href="http://google.com"</script>';
        #die();
    ?>
</body>
</html>
--> 
<?php 
        #ob_end_flush();
?>
