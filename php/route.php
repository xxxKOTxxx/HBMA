<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	$base = getcwd();
	$path = str_replace($root, '', $base);

	$request_uri = $_SERVER['REQUEST_URI'];
	$request = str_replace($path, '', $request_uri);
	
	if($request == '/') {
		$page = 'main';
	}
	else {
		if(file_exists('pages/'.$request.'.php')) {
			$page = trim($request, '/');
		}
		else {
			$page = 404;
	    header('HTTP/1.0 404 Not Found');
		};
	};
?>