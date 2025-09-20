<?php
	if (isset($_COOKIE["lang"])){
		$_SESSION['lang'] = $_COOKIE["lang"];
		} else {
		$_SESSION['lang'] = ru;
	}
	?>	
<?php 
if(isset($_SESSION['user'])) {
	header('Location: content.php');
	die();
} else {
	require 'views/main.view.php';
}
?>