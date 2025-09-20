<?php 
//--------------------LANG--------------------
// ru en

if (isset($_SESSION["lang"])){
	$lang = $_SESSION["lang"];
	} elseif (isset($_COOKIE["lang"])) {
	$lang = $_COOKIE["lang"];
	}else{
	$lang = ru;
}
//$lang = $_COOKIE["lang"];
require '/langs/'.$lang.'.php';
?>