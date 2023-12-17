<?php

	function callKoishi(){
		return 'Koishi: Hello!';
	}

	function callSatori(){
		echo 'Satori: Hello!';
	}

	echo '<h1> Koishi </h1>';
	$frase = "Hello, Koishi Komeiji!";
	echo $frase;
	echo '<br />';
	echo callKoishi();
	echo '<br />';
	$frase = "Hello, Satori Komeiji!";
	echo $frase;
	echo '<br />';
	callSatori();

?>