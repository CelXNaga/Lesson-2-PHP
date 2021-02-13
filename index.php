<?php
header("content_type:text/html;charset='utf-8'");

require_once("config.php"); 
require_once("classes/core.php");

if($_GET['option']) {
	$class = $_GET['option'];
}
else {
	$class = 'main';
}

include("classes/".$class.".php");
$obj = new $class;
$obj->get_body();


  ?>