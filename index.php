<?php
	$title = "PHP Json GUI";
	$desc = "You can use json basic functions directly without any hassle. It provides Json Encoder / Decoder / Validatior / Pettifier like functionalities";

	require_once(__DIR__.'/src/head.php')
?>
	<header>
		<h1> <?=$title?> </h1>
	</header>
	<a href="json-encode.php"> <button> Json Encode </button> </a>
	<a href="json-decode.php"> <button> Json Decode </button> </a>
	<a href="json-validator.php"> <button> Json Validator </button> </a>
	<a href="json-pretty.php"> <button> Pretty Json </button> </a>

<?php require_once(__DIR__.'/src/foot.php'); ?>
