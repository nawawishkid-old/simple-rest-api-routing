<?php

Route::get( '/api/test', function ($request) {
	announce($request);
});

Route::post( '/api/test', function ($request) {
	announce($request);
});

Route::delete( '/api/test', function ($request) {
	announce($request);
});

Route::put( '/api/test', function ($request) {
	announce($request);
});

Route::patch( '/api/test', function ($request) {
	announce($request);
});

function announce($request) {
	echo 'Path is ' . $request->uri . '<br>';
	echo 'Method is ' . $request->method . '<br>';
}
