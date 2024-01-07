<?php
require('vendor/autoload.php');

use Sinergi\BrowserDetector\Browser;

$browser = new Browser();

if ($browser->getName() === Browser::CHROME) {
    echo 'Estou utilizando o Chrome!';
}
?>
