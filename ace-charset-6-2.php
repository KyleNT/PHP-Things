<?php

include('geoiploc.php');
$ip = '190.89.246.21';

$country_code = getCountryFromIP($ip, "code");
$country = getCountryFromIP($ip, "name");

echo "Seu IP: <b>$ip</b> <br> Seu país: <b>$country</b> <br> Seu código de país: <b>$country_code</b>"

?>