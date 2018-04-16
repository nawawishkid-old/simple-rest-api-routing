<?php

Route::run(Request::singleton([
	'method' => $_SERVER['REQUEST_METHOD'],
	'uri' => $_SERVER['REQUEST_URI'],
	'query_string' => $_SERVER['QUERY_STRING']
]));
