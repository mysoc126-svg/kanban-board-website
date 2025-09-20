<?php 
session_start();
$lang = $_GET['lang'];
// DO SOME CHECK HERE TO ENSURE A CORRECT LANGUAGE HAS BEEN PASSED
// OTHERWISE REVERT TO DEFAULT
$_SESSION['lang'] = $lang;
setcookie("lang", $_SESSION["lang"], time()+3600);
header('Location:'.$_SERVER['HTTP_REFERER']); // Or wherever you want to redirect
?>