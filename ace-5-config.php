<?php
##Módulo interno
    session_start();
    include('facebook-php-sdk/autoload.php');
    use Facebook\Facebook;
    use Facebook\Exceptions\FacebookResponseException;
    use Facebook\Exceptions\FacebookSDKException;

    $aprimaId = '308423331698816';
    $aprimaSec = 'fedc0eb8006afd41238af85181f8faae';
    $redirectUrl = 'http://localhost/testesphp/ace-5.php';
    $secondaryRedirectUrl = 'http://localhost/testesphp/';
    $fakebookPermissions = array('email');

    $fakebook = new Facebook(array(

        'app_id' => $aprimaId,
        'app_secret' => $aprimaSec,
        'default_graph_version' => 'v17.0',

    ));

    $ajudante = $fakebook->getRedirectLoginHelper();

    try{
        if(isset($_SESSION['facebook_access_token'])){
            $accessToken = $_SESSION['facebook_access_token'];
        } else {
            $accessToken = $ajudante->getAccessToken();
        }
    } catch (FacebookResponseException $flandre){
        echo $flandre;
    }
?>