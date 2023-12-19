<?php include('tradutor.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo self::titulo ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2><?php echo $trad['pa8'];?></h2>
            </div>
            <nav class="menu">
                <?php
                foreach ($this->menuItems as $key => $value) {
                    # code...
                    echo '<a href="' . INCLUDE_PATH . strtolower($value) . '">' . $this->menuItemsR[$key] . ' </a>';
                }
                ?>
            </nav>
            <div class="clear">
            </div>
            <div>
        <div class="language"> <!-- Olhe em iso 639-1-->
            <a href="?idioma=pt-br">Português</a>
            <a href="?idioma=ar">Árabe</a>
            <a href="?idioma=zh-cn">Chinês</a>
            <a href="?idioma=hi">Hindu</a>
            <a href="?idioma=ur">Urdu</a>
            </div>
            </div>
        </div>
        </div>
    </header>