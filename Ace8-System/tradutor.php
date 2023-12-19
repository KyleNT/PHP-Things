<?php
// Inicia uma sessão (* sempre no topo da pagina)
//session_start();

// Define qual idioma será utilizado
if(!isset($_SESSION['idioma'])){
    // Define um idioma inicial
    //throw new ErrorException($_SESSION['idioma']);
    $_SESSION['idioma'] = 'pt-br.php';

} else if(!isset($_GET['idioma'])){

    include 'traducoes/pt-br.php';

  
// Define um novo idioma a partir de um get
} else if(isset($_GET['idioma'])){

    include 'traducoes/'.$_GET['idioma'].'.php';

};

?>