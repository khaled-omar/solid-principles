<?php
// Autoload function
function __autoload($class) {
	// Convert namespace to full file path.
	$class =  str_replace('\\', '/', $class) . '.php';
	$class = str_replace('App/', '', $class);
	require_once($class);
}