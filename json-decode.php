<?php
	$i = '';
	$post = false; $error ='';
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$post = true;
		$i = $_POST['i'];
		$opt = json_decode($_POST['i'], true);
		switch (json_last_error()) {
		    case JSON_ERROR_NONE:
		        $error = '';
		    break;
		    case JSON_ERROR_DEPTH:
		        $error = 'Maximum stack depth exceeded';
		    break;
		    case JSON_ERROR_STATE_MISMATCH:
		        $error = 'Underflow or the modes mismatch';
		    break;
		    case JSON_ERROR_CTRL_CHAR:
		        $error = 'Unexpected control character found';
		    break;
		    case JSON_ERROR_SYNTAX:
		        $error = 'Syntax error, malformed JSON';
		    break;
		    case JSON_ERROR_UTF8:
		        $error = 'Malformed UTF-8 characters, possibly incorrectly encoded';
		    break;
		    default:
		        $error = 'Unknown error';
		    break;
		}
	}

	$title = "Json Decode | PHP Json GUI";
        $desc = "";

        require_once(__DIR__.'/src/head.php');
        require_once(__DIR__.'/src/nav.php');


if($post){
	if(!empty($error)){
		echo '<p class="error">'.$error.'</p>';
	} else {
?>
	<form method="post" action="json-pretty.php">
		<label>OUTPUT:</label> <button class="btn-pretty"> Prettry </button>
	        <textarea name="i" placeholder="Output Comes Here" readonly required><?=$opt?></textarea>
	</form>
	<br /> <br />

<?php	}

}
?>
<form method="post" action="">
	<label> INPUT: </label>
	<textarea name="i" placeholder="Enter Text Here" required><?=$i?></textarea>
	<br />
	<button> Decode </button>
</form>

<?php require_once(__DIR__.'/src/foot.php') ?>
