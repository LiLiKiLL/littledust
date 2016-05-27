<?php
	header("content-type:text/html;charset=utf-8");
	define("APP_PATH","./App/");
	define("APP_DEBUG",true);
	$_GET['m'] = "Admin";
	$_GET['c'] = "Sign";
	$_GET['a'] = "login";
	require "./ThinkPHP/ThinkPHP.php";