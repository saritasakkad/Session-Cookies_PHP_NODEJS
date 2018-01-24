<?php

$dbconfig = array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '',
		'dbname' => 'akkad'
	);


	function debug($var){
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}

	function dd($var)
	{
		debug($var);
		die();
	}
