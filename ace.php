<html>

    <head>
        <title> 72 Horas </title>
        <meta charset="utf-8">
    </head>

    <body>
        <p>

        <?php
        //Sessão
        session_start();
        //Cookie
        setcookie('Bixxcoito','Você goxxta de Bixxcoito?',time() + (60), '/');
        //subtrai cookies
        //setcookie('Bixxcoito','Você goxxta de Bixxcoito?',time() - (60), '/');


        /* Data */
        date_default_timezone_set('America/Recife');

        function swPresident(){
            return "Miiiin president!";
        }

        function triBi(){
            echo "比,比,比,比,比 水戸!!!";
        }

        function paçoca(){
            $paçoca = "Tá tininnndooum";
            return $paçoca;
        }

        /** Variáveis */
        $ace = "Keiki Haniyasushin";
        $mac = 23;
        $toop = true;
        $dandling = 3.14;
        $divã = "divãbox";

        /**Constantes */
        define('SOB',"Botaram uma arma da cabeça minha mulher, ohohohohoh :sob: ");
        define('BICHO',"Ô bicho, ô bicho mentiroso mermão");

        /**Arrays */
        $festa = array("Suequinha", "Chimub", "Chirumiru");
        $festa2[] = "Suequinha";
        $festa2[] = "Chimub";
        $festa2[] = "Chirumiru";
        //$festa3[0] = "Suequinha";
        //$festa3[1] = "Chimub";
        $festa3 = ['Suequinha', 'Chimub', 'Chirumiru'];
        $festa4 = array("Suequinha", 21, true, 70.00);
        $banditen['nome'] = "Chirumiru";
        $banditen['idade'] = 18;
        $banditen['cidade'] = "Fortaleza";

        /**Matemáticas */
        $numerol = 50 + 30;
        $numerália = 13+12;

        $resultadol = $numerol / $numerália;
        $resultadália = 4 * (5+2);
        $restov = 111 % 23;

        /** Variáveis condicionais */
        $varsóvia1 = "Chimub";
        $varsóvia2 = "Carneiro";

        /** Echos */
        echo "<h1>";
        echo date('l, F jS  Y h:i:s A');
        echo "</h1>";
        /* Nome do Server */
        echo $_SERVER['DOCUMENT_ROOT'];
        echo "<br />";
        echo "Salve mundum!";
        echo "<br />";
        /* Concatenação */
        echo $ace . ", só mais 72 horas!";
        echo "<br />";
        echo "Is true? " . $toop;
        echo "<br />";
        echo "Double: " . $dandling;
        echo "<br />";
        echo swPresident();
        echo "<br />";
        triBi();
        echo "<br />";
        echo paçoca();
        echo "<br />";
        echo $mac;
        echo "<br />";
        echo SOB;
        echo "<br />";
        echo BICHO;
        echo "<br />";
        echo $festa[0];
        echo "<br />";
        echo $festa2[1];
        echo "<br />";
        echo $festa3[2];
        echo "<br />";
        echo $festa4[3];
        echo "<br />";
        echo $banditen['nome'];
        echo "<br />";
        echo $banditen['idade'];
        echo "<br />";
        echo $banditen['cidade'];
        echo "<br />";
        echo 'Nome: ' . $ace . ', Idade: ' . $mac;
        echo "<br />";
        echo "Nome: $ace, Idade: $mac";
        echo "<br />"; 
        echo "<div class=\"$divã\"> Conteúdo do Divã <div>"; 
        echo "<br />"; 
        echo "Resultado: $resultadol";  
        echo "<br />";  
        echo "Resultado: $resultadália";  
        echo "<br />";  
        echo "Resultado: $restov";  
        echo "<br />";
        
        //*Conditional*/
        $northen = 'Norr';
        $southern = 'Söder';
        $ostern = 'Öst';
        $western = 'Väst';


        echo "<br />";
        if($varsóvia1 == $varsóvia2){
            echo 'A condição bate';
        } else {
            echo 'A condição não bate';
        }
        echo "<br />";

        if($northen == "Norr"){
            echo 'Verdade';
        } else if($southern == "Söder"){
            echo 'Verdade no Else-if';
        } else {
            echo 'Falso';
        }
        echo "<br />";
        
        /*
        if(("1 Gratito" + "2 Ace") == "3 Davi"){
            echo '1 Gratito + 2 Ace = 3 Davi';
        } else {
            echo 'falso';
        }
        echo '<br />';
        */
        
        /** Operadores */
        /*
        = retorna vdd
        == é igual
        != é diferente
        === é identêntico (valor e tipo)
        !== é diferente (tipo e valor)
        < Menor que (chevron esquedo)
        > Maior que (chevro direito)
        <= Menor ou igual que
        >= Maior ou igual que
        && E
        || Ou
        */

        /** Laço de repetição */
        
        echo "<hr>";
        //FOR
        for($decoreba=0; $decoreba<5;$decoreba++){
            echo $decoreba . ' - Reba';
            echo "<br /";
            echo $decoreba;
            echo "<br />";
        }
        echo '<hr>';
        //While
        $decorebal = 0;
        while($decorebal < 5){
            echo $decorebal . ' - Rebal';
            echo "<br />";
            $decorebal++;
        }
        echo '<hr>';
        //Do-While
        $decorebônia = 0;
        do{
            echo $decorebônia . ' - Rebônia';
            echo "<br />";
            $decorebônia++;
        } while($decorebônia < 5);
        
        echo '<hr>';
        //Foreach
        $argh = array("Eslavônia 1" => "Suequinha", "Chimub", "Chirumiru", "Carneiro", "Geraldinho");
        $精氨酸 = array(
            "苏奎尼亚",
            "奇穆布",
            "奇鲁米鲁",
            "卡内罗",
            "杰拉尔迪尼奥",
            "艾斯",
            "萨卡莫图",
            "约索斯韦尔多",
            "唐哈库雷瓦斯科"); 
        $Jīng_ān_suān = array(
            "Sū kuí ní yǎ",
            "qí mù bù",
            "qí lǔ mǐ lǔ",
            "kǎ nèi luó",
            "jié lā ěr dí ní ào",
            "Ài sī",
            "Sà kǎ mò tú",
            "Yuē suǒ sī wéi ěr duō",
            "Táng hā kù léi wǎsī kē");


        foreach($argh as $key => $value){
            echo $key;
            echo ' => ';
            echo $value;
            echo "<br />";
        }
        echo '<hr>';
        $总数 = count($精氨酸);
        for($伊巴 = 0; $伊巴 < $总数; $伊巴++){
            echo $伊巴 . " - " . $精氨酸[$伊巴] . " (" . $Jīng_ān_suān[$伊巴] . ")";
            echo "<br />";
        }
        echo '<hr>';
        //Array Multidimensionais
            /*
            $arr = ['Musk', 'Zuckerberg'];
            $arr = array('Musk','Mark'=>'Zuckerberg');

            $arr[0] = 'Musk';
            $arr[] = 'Zuckerberg';
            */
        $arr2 = array(array('Musk','Zuckeberg'),array(1999,2004));
        echo $arr2[1][0];
        echo "<br />";
        $arr2_5[0] = array('French Musk' => 'Muskeé', 'Zuckeé');
        echo $arr2_5[0]['French Musk'];
        echo "<br />";
        $arr2_25[0]['French Dusko'] = 'Duzkeé';
        echo $arr2_25[0]['French Dusko'];
        //Die - Sleep
        //Sleep
        sleep(1);
        echo "<br />";
        echo '卡巴·达·穆莱斯特·达·帕科卡 - Kǎbā·dá·mù lái sī tè·dá·pà kē kǎ';
        //sleep(3);
        echo '<br />';
        echo '埃弗斯 - āi fú sī';
        echo '<br />';
        //die
        $nomal = 'Joões';
        if($nomal == 'João'){
            echo 'João';
        } else {
            //die("MORREU.");
        }
        echo '<br />';
        echo 'velbs';

        //Funções Nativas
        function varsóviaDoNome($paraquilômetro,$paridade){
            echo '<h2> Cidades </h2>';
            echo '<br />';
            echo 'Varsóvia é: ' . $paraquilômetro;
            echo '<br />';
            echo "Idade da Cidade: $paridade";
        }

        function calculadora($numero1 = 10, $numero2 = 5){
            echo ($numero1 + $numero2);
        }

        function tetola(){
            return true;
        }

        function retornarTetola(){
            if(tetola() == true){
                return 'Sim';
            } else {
                return 'Tá mentindo.';
            }
            
        }

        $tetola = tetola();
        varsóviaDoNome('Warsaw',75);
        echo '<br />';
        calculadora(20,18);
        echo '<br />';
        echo 'Cazé é Tetola? ' . retornarTetola();
        echo '<br />';
        //Include e Date
        $datal = date('d/m/Y H:i:s',time()+(60*10));
        echo $datal;

            ///include('index.php');
        echo '<br />';
        // Funções para Strings
        $heysatori = "Hej, tam gdzieś z nad czarnej wody Wsiada na koń kozak młody. Czule żegna się z dziewczyną, Jeszcze czulej z Ukrainą. Refrão: Hej, hej, hej Satori Omijajcie góry, lasy, doły. Dzwoń, dzwoń, dzwoń dzwoneczku, Mój stepowy skowroneczku. Hej, hej, hej Satori Omijajcie góry, lasy, doły. Dzwoń, dzwoń, dzwoń dzwoneczku, Mój stepowy dzwoń, dzwoń, dzwoń";
        $heysatori2 = "Гей, десь там, де чорні води, Сів на коня козак молодий. Плаче молода дівчина, Їде козак з України.Гей! Гей! Гей, соколи! Оминайте гори, ліси, доли. Дзвін, дзвін, дзвін, дзвіночку, Степовий жайвороночку. Гей! Гей! Гей, соколи! Оминайте гори, ліси, доли. Дзвін, дзвін, дзвін, дзвіночку, Мій степовий дзвін, дзвін, дзвін.";
            ///Recorta String
        echo substr($heysatori, 0,20);
            ///Recorta no Espaço
        $heysatoral = explode(' ',$heysatori);
        $heysatoral2 = explode(' ',$heysatori2);
        echo '<br />';
        print_r($heysatoral);
        echo '<br />';
        print_r($heysatoral2);
        echo '<br />';
            ///Junta um array com delimitador
        $heysatoral = implode(' ',$heysatoral);
        echo 'Polish: ' . $heysatoral;
        echo '<br />';
        $heysatoral2 = implode(' ',$heysatoral2);
        echo 'Ukranian: ' . $heysatoral2;
            ///Remover os códigos html
        echo '<br />';
        $conteudal = '<h1>Kimichurri</h1> crespo';
        echo strip_tags($conteudal);
        echo '<br />';
            //htmlentities mostra o código html na página
        echo htmlentities('<div></div>');
        echo '<br />';
        //Switch, continue, break
        $nomol = 'Thiago';
        switch($nomol){
            case 'Thiago':
                echo 'Thiago Braga';
                break;
            case 'Kim';
                echo 'Kim Kataguiri';
                break;
        }
        //Break serve para for, while, do, foreach e switch
        //Continue, Ignora
        echo '<br />';
        for($i = 0; $i < 10; $i++){
            if($i == 5)
            continue;
            echo $i;
            echo ' Barral';
            echo '<br />';
         
            if($i == 8){
                break;
            }
        }
        echo '<br />';

        //Uma linha, o IF lê
        $varol = false;
        if($varol == true)
            $nomólia = 'Karitherium';
        $idadol = 23;

        echo $idadol;
        echo '<br />';
        echo $nomólia;
        //Manipulação de Arrays
        ///Array Merge = Une um ou mais arrays
        $jalimMamei = array("Chavônia 1" => "Jalim", "Chavônia 2" => "Mamei");
        $volimRabah = array("Chavônia 3" => "Volim", "Chavônia 4" => "Rabah");
        $tsugiroKimikoma = array("Chavônia 5" => "Tsugiro", "Chavônia 6" => "Kimikoma");
        $resultov = array_merge($jalimMamei, $volimRabah, $tsugiroKimikoma);
        print_r($resultov);
        echo '<br />';
        ///Array Intesect Key = Serve para retornar valores com a mesma chave em 1 ou mais arrays
        $jalimMamei2 = array("Chavônia 1" => "Jalim", "Chavônia 2" => "Mamei");
        $volimRabah2 = array("Chavônia 1" => "Nikolas", "Chavônia 2" => "Gadeira", "Chavônia 3" => "Volim", "Chavônia 4" => "Rabah");
        print_r(array_intersect_key($jalimMamei2, $volimRabah2));
        echo '<br />';
        ///Array Map = Aplica a função em todos os valores do array
        $arnm = ['<p> Codorna de Óculos </p>','<h2> Allan dos Panos </h2>'];
        print_r(array_map('strip_tags', $arnm));
        echo '<hr>';

        //Formulários get/
        //O Get Mostra por link
        if(isset($_GET['ação'])){
            //O Arroba para não mostrar erro de vazio
            $nomália = @$_GET['nome'];
            $emália = @$_GET['email'];

            echo 'Get Nomália: ' . $nomália;
            echo '<br />';
            echo 'Get Emália: ' . $emália;
            echo '<br />';
        }
        //O post oculta informações por link
        if(isset($_POST['ação'])){
            $nomália = @$_POST['nome'];
            $emália = @$_POST['email'];
            echo 'Soma: ' . ($_POST['numerol1'] + $_POST['numerol2']);
            echo '<br />';
            echo 'Praça TV selecionada: ' . $_POST['PraçaTV'];
            echo '<br />';
            echo 'Post Nomália: ' . $nomália;
            echo '<br />';
            echo 'Post Nomália: ' . $emália;
            echo '<br />';
            foreach($_POST['valoral'] as $eryn => $valorant){
                echo $eryn;
                echo '=>';
                echo $valorant;
                echo '<br />';
            }
            echo '<br />';
        }

        ?>
        <form method="post">
            <select name="PraçaTV">
                <option value="abtv1"> ABTV 1ª Edição </option>
                <option value="abtv2"> ABTV 2ª Edição </option>
                <option value="sptv1"> SPTV 1ª Edição </option>
                <option value="sptv1"> SPTV 2ª Edição </option>
            </select>
            <input type="text" name="nome" />
            <input type="text" name="email" />
            <input type="text" name="numerol1" />
            <input type="text" name="numerol2" />
            <input type="checkbox" name="valoral[]" value="5" /> 5
            <input type="checkbox" name="valoral[]" value="10" /> 10
            <input type="checkbox" name="valoral[]" value="15" /> 15
            <input type="checkbox" name="valoral[]" value="20" /> 20
            <input type="submit" name="ação" value="Enviar" />
        </form>

        <?php
        //Sessões e Cookies
            //Sessão = Fica válido até o usuário fechar o navegador
            //Cookie = Mesmo que fica fechado o navegador, quando for voltar, está guardado, e pode definir o tempo que vai expirar

            $_SESSION['Paffoca'] = 'Gabriel Monteiro';
            $_SESSION['Rolam'] = 'Tá Tinindoum';

            //Cookie
            //Barra serve para todas as páginas
            if (isset($_COOKIE['Bixxcoito']))
            {
                echo $_COOKIE['Bixxcoito'];
            } else {
                echo 'Não há cookies';
            }
            echo '<br />';
            
        //Sintaxe Alternativa
            //IF
            $nomola = 'Karium';
            if($nomola == 'Karium'):
                echo 'Karium';
            endif;
            echo '<br />';

            //While
            $contada = 0;
            while($contada < 10):
                $contada++;
                echo $contada . ' paçocas';
                echo '<br />';
            endwhile;

            //Foreach
            $arro = array();
            foreach($arro as $key => $value):
                //code
                echo $key;
                echo ' => ';
                echo $value;
                echo "<br />";
            endforeach;

            //For
            for($i=0; $i<10; $i++):
                //code
            endfor;


        /* Informação do Server */
        #echo "<pre>";
        #print_r($_SERVER);
        #echo "</pre>";

        
        #Suequinha based, branca e conservadora
        #Chimub based, conservador
        #Chirumiru negro, macaco, petista
        #Vitória cringe, burra, macaca e petista
        #Pai nome de macaco, gorila, escravo e petista
        #JEFFERSON IPETV GRANDE MACACO, NEGRO AFRICANO, BANDIDO, ESTELICNARÁTIO, PETISTA.
        ?>
        <?php
        //echo '<br />';
        //include('footer.php');
        ?>
        </p>
    </body>

    <script type="text/javascript">
        //alert("Atenção patriotas, só mais 72 horas!")
    </script>

<html>