<?php

/*
 * Simple autoload that follow the PHP Standards Recommendation #0 (PSR-0)
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md for more informations.
 *
 * Code from the SplClassLoader RFC, see https://wiki.php.net/rfc/splclassloader#example_implementation
 * 
 */
spl_autoload_register(function($className) {
	$className = ltrim($className, '\\');
	$fileName = '';
	$namespace = '';
	if ($lastNsPos = strripos($className, '\\')) {
		$namespace = substr($className, 0, $lastNsPos);
		$className = substr($className, $lastNsPos + 1);
		$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	}
	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

	require __DIR__.'/'.$fileName;
});
