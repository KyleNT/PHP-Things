<html>
    <body>
        <h1> Hey Satori </h1>
        <?php
        
            session_start();
            if(isset($_SESSION['Paffoca'])){
                echo $_SESSION['Paffoca'];
            }

            $_SESSION['Bolo'] = "Bolo Molhadinho";
            $_SESSION[0] = "Paffoca";
            $_SESSION[1] = 'Gabriel Monteiro';

            echo $_SESSION['Bolo'];
            echo '<br/>';
            echo $_SESSION[0];
            echo '<br/>';
            echo $_SESSION[1];
            echo '<br/>';

            //Esvazia
            //$_SESSION['Paffoca'] = '';
            //echo $_SESSION['Paffoca'];

            //Limpa a sessão da memória
            unset($_SESSION['Paffoca']);

            //Destrói todas as variáveis de sessões
            session_destroy();
        ?>
        <br />
        <p>
            Hej, tam gdzieś z nad czarnej wody
            Wsiada na koń kozak młody.
            Czule żegna się z dziewczyną,
            Jeszcze czulej z Ukrainą.

            Refrão:
            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy skowroneczku.

            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy dzwoń, dzwoń, dzwoń

            Wiele dziewcząt jest na świecie,
            Lecz najwięcej w Ukrainie.
            Tam me serce pozostało,
            Przy kochanej mej dziewczynie.

            Refrão:
            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy skowroneczku.

            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy dzwoń, dzwoń, dzwoń

            Żal, żal za dziewczyną,
            Za zieloną Ukrainą,
            Żal, żal serce płacze,
            Już jej więcej nie zobaczę.

            Refrão:
            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy skowroneczku.

            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy dzwoń, dzwoń, dzwoń

            Wina, wina, wina dajcie,
            A jak umrę pochowajcie
            Na zielonej Ukrainie
            Przy kochanej mej dziewczynie.

            Refrão:
            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy skowroneczku.

            Hej, hej, hej Satori
            Omijajcie góry, lasy, doły.
            Dzwoń, dzwoń, dzwoń dzwoneczku,
            Mój stepowy dzwoń, dzwoń, dzwoń
        </p>
    </body>
</html>