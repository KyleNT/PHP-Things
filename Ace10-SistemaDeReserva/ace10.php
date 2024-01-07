<?php
    date_default_timezone_set("America/Sao_Paulo");
    $gsp = new pdo('mysql:host=localhost;port=3307;dbname=sistema','root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace 10 - Sistema de Reserva</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@300;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Lato";
    }

    body{
        background: rgb(225,225,225);
    }
    header{
        padding: 10px 0;
        background: #333;
        color: white;
    }

    nav.menu ul{
        list-style-type: none;
    }

    nav.menu li{
        display: inline-block;
        padding:0 8px;
    }

    nav.menu a{
        color: white;
        text-decoration: none;
    }
    .logo{
        float: left;
    }
    .clear{
        clear: both;
    }
    nav.menu{
        position: relative;
        top: 4px;
        float:right;
    }
    .center{
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 2%;
    }

    section.reserva{
        /*background: #ccc;*/
        padding: 40px 0;
        text-align: center;
    }

    section.reserva select{
        width: 100%;
        height: 30px;
        border: 1px solid #ccc;
    }

    section.reserva input[type=text]{
        width: 100%;
        height: 30px;
        padding-left: 7px;
        margin-bottom: 10px;
    }
    section.reserva input[type=submit]{
        background: #4286f4;
        width: 200px;
        height: 30px;
        border: 0;
        cursor: pointer;
        color: white;
        font-size: 19px;
        font-weight: bold;
        margin-top: 10px;
    }

    .sucesso{
        width: 100%;
        margin:10px 0;
        padding: 8px 15px;
        color: #3c763d;
        background: #dff0d8;
    }
</style>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2> Ace 10</h2>
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="">Reservas</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
    </header>

    <section class="reserva">
        <div class="center">
            <?php
                if(isset($_POST['acao'])){
                    //Reserva!
                    $nome = $_POST['nome'];
                    $dataHora = $_POST['dataHora'];
                    $date = DateTime::createFromFormat('d/m/Y H:i:s', $dataHora);
                    $dataHora = $date->format('Y-m-d H:i:s');
                    

                    $slc = $gsp->prepare('INSERT INTO `tb_agendados` VALUES (null,?,?)');
                    $slc->execute(array($nome, $dataHora));
                    echo '<div class="sucesso">Seu horário foi agendado com sucesso!</div>';
                }
            ?>
            <form method="post">
                <input type="text" name="nome" placeholder="Seu nome...">
                <select name="dataHora">
                    <?php
                        for($i = 0; $i <= 23; $i++){
                            $hora = $i;
                            if($i < 10){
                                $hora = '0'.$hora;
                            }

                            $hora.=':00:00';

                            $verifica = date('Y-m-d').' '.$hora;
                            $slc = $gsp->prepare("SELECT * FROM `tb_agendados` WHERE horario = '$verifica'");
                            $slc->execute();
                            if($slc->rowCount() == 0 && strtotime($verifica) > time()){
                                $dataHora = date('d/m/Y').' '.$hora;
                                echo '<option value="'.$dataHora.'">'.$dataHora.'</option>';
                            }
                        }
                    ?>
                </select>
                <input type="submit" name="acao" value="Enviar!">
            </form>
        </div>
    </section>
</body>
</html>