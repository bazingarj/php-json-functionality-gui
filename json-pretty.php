<?php
        $i = '';
	$post = false;
	$error = '';
        if($_SERVER['REQUEST_METHOD'] == "POST"){
		$post = true;
                $i = $_POST['i'];
                $opt = json_decode($i, true);
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

	if($post && empty($error)){
		header('Content-Type: application/json');
                echo json_decode(json_encode($i), JSON_PRETTY_PRINT);
		exit;
	}


	$title = "Json Prettifier | PHP Json GUI";
        $desc = "";

        require_once(__DIR__.'/src/head.php');
        require_once(__DIR__.'/src/nav.php');
?>

<?php
	if($post &&!empty($error)){
		echo '<p class="error">'.$error.'</p>';
	}
?>
<form method="post" action="">
	<label> INPUT: </label>
	<textarea name="i" placeholder="Enter Text Here" required><?=$i?></textarea>
	<br />
	<button> Prettify </button>
</form>


<?php
	 require_once(__DIR__.'/src/foot.php');
 ?>
