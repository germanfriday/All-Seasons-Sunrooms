<?
function stripFormSlashes ($arr) {
	if (!is_array($arr)) {
	return stripslashes ($arr);
	} else {
	return array_map('stripFormSlashes', $arr);
	}
	}
	if (get_magic_quotes_gpc()) {
	$_GET  = stripFormSlashes ($_GET);
	$_POST  = stripFormSlashes ($_POST);
	
	}
	?>