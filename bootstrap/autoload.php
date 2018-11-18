<?php
// Autoload function
function __autoload($class) {
	// Convert namespace to full file path.
	$class = str_replace('App/', '', str_replace('\\', '/', $class) . '.php');
	// Require class ;
	require_once($class);
}