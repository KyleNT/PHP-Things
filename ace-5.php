<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form method="post">
        <input type="text" name="address" />
        <input type="submit" name="action" value="Enviar"/>
    </form>
    -->
    <h1>1:54</h1>
</body>
</html>

<?php
### Módulo Médio
//Aula 1 (NULA, NÃO SERVE)
    //Nota, não vai functionar pois o google é um Filho da Puta que cobra por API por requisição do google
    /*
    if(isset($_POST['action'])){
        $url = urlencode($_POST['address']);
        $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');

        $endereco = json_decode($str);

        //
        //echo $endereco->results->address_components[0]->short_name;
        echo '<pre>';
        //var_dump($str);
        echo '</pre>';
        //print_r($endereco);
        echo 'Nome do Bairro:';
        echo '<br />';
        echo $endereco->results[0]->address_components[1]->short_name;
        echo '<br />';
        echo 'Nome correto da rua:';
        echo '<br />';
        echo $endereco->results[0]->address_components[0]->short_name;
        echo '<br />';
    }
    */

//Aula 2

    /**
     * Agora esta parte é inútil, meramente inútil
     * $endereço = urlencode('Local');
     */
    //Inicializar url
    $chaves = curl_init();
    //url do post
    curl_setopt($chaves, CURLOPT_URL,"http://localhost/testesphp/ace-5-1.php");
    //o post
    curl_setopt($chaves, CURLOPT_POST, 1);
    //campos de post
    //curl_setopt($chaves, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");
    //Pode passar como array com função http_build_query:
    curl_setopt($chaves, CURLOPT_POSTFIELDS, http_build_query(array('request'=>'name_return')));
    //Retorne tudo o que o server responde
    curl_setopt($chaves, CURLOPT_RETURNTRANSFER, true);

    //Execute no output
    $server_output = curl_exec($chaves);
    //Feche (Fechium)
    curl_close($chaves);

    //Requisição do curl no server local
    $cão_do_inferno = json_decode($server_output);
    //print_r($cão_do_inferno);
    //echo $cão_do_inferno->resultado->objeto_2;
    echo $cão_do_inferno->Título[0];
    echo '<br />';
    echo $cão_do_inferno->Conteúdo[0];
    echo '<br />';

    //Metade da Aula jogou no LIXO

    //Aula 3: Facebook
    //user/auth/facebook/callback
    //fedc0eb8006afd41238af85181f8faae - chave secreta
    //308423331698816 - id do app
    include('ace-5-config.php');
    if(isset($accessToken)){
        if(isset($_SESSION['facebook_access_token'])){
            $fakebook->setDefaultAccessToken($_SESSION['facebook_access_token']);
        } else {
            $_SESSION['facebook_access_token'] = (string) $accessToken;
            $xamego_oAuth2Client = $fakebook->getOAuth2Client();
            $baiãoDeDois_longLivedAccessToken = $xamego_oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token']  = (string) $baiãoDeDois_longLivedAccessToken;
            $fakebook->setDefaultAccessToken($_SESSION['facebook_access_token']);

        }

        if(isset($_GET['code'])){
            header('Location: ./');
        }

        try{
            //profileRequest
            $porífioDiasRequest = $fakebook->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
            $fakebookUserPorífio = $porífioDiasRequest->getGraphNode()->asArray();
        } catch(FacebookResponseException $flandre_2){
            echo $flandre_2;
        }

        print_r($fakebookUserPorífio);

        $fakebookUserDeeta = [
            'oauth_provider' => 'facebook',
            'oauth_uid' => $fakebookUserPorífio['id'],
            'first_name' => $fakebookUserPorífio['first_name'],
            'last_name' => $fakebookUserPorífio['last_name'],
            'email' => $fakebookUserPorífio['email'],
            'imagem' => $fakebookUserPorífio['picture']['url'],
        ];

        $userDeeta = $fakebookUserDeeta;

        $_SESSION['userData'] = $fakebookUserDeeta;

        $mangangá_logoutUrl = $ajudante->getLogoutUrl($accessToken, $secondaryRedirectUrl.'ace-5-logout.php');

        //print_r($userDeeta);
        
        if(!empty($userDeeta)){
            $willfall = '<h2> Fakebook Deeta </h2>';
            $willfall.= "Nome: $userDeeta[first_name]";
            $willfall.= "<br />";
            $willfall.= "Sobrenome: $userDeeta[last_name]";
            $willfall.= "<br />";
            $willfall.= "Email: $userDeeta[email]";
            $willfall.= "<br />";
            $willfall.= '<img src="'.$userDeeta['imagem'].'"/>';
            $willfall.= '<br/> <a href="'.$mangangá_logoutUrl.'"> Logout </a>';
 
        } else {
            $willfall = '<h3> O motorista do ônibus comia um baião de dois e acabou batendo na fiação</h3>';
        }

    } else {
        //echo 'O ônibus bateu na fiação do código e fudeu com tudo';
        $orélia_loginUrl = $ajudante->getLoginUrl($redirectUrl, $fakebookPermissions);
        $willfall = '<a href="'.$orélia_loginUrl.'"> Fazer login com facebook PHP</a>';
    }

    echo $willfall;

    echo "<br />";

    //Aula 3 - Melhor não fazer

    //Aula 4 - Instagram //Não funciona mais
    /*
    $j_quest = file_get_contents('https://www.instagram.com/kaiovsilva64/feed/?__a=1&__d=dis');
    $objD = json_decode($j_quest);
    $ibages = $objD->user->media->nodes;

    echo $ibages[0]->thumbnail_src;
*/
    //Aula 5 - Que naverdade é a 4.
    /*
    include('vendor/autoload.php');

	use MetzWeb\Instagram\Instagram;

    //ClientID: 3432460850337493
    //Secret Key: d4fb12057ab4744cf21043b88d7a0b4c
	$instagram = new Instagram(array(
		'apiKey'      => '3432460850337493',
		'apiSecret'   => 'd4fb12057ab4744cf21043b88d7a0b4c',
		'apiCallback' => 'http://localhost/testesphp/ace-5.php'
	));

	
	if(isset($_GET['code'])){
	// grab OAuth callback code
		$code = $_GET['code'];
		$data = $instagram->getOAuthToken($code);

		var_dump($data);
	}else{
		echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
	}
*/
?>