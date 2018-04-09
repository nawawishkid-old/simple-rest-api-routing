# PHP Simple REST API Routing
This repo just provides request routing management based on REST architecture, not ready-to-use REST API system.  
You have to build or integrate database query system or ORM, e.g. Eloquent, for fully functioning REST API system.  

### Example usage
```php
Route::get('/api/test', function ($request) {
	// do something with $request with GET method
});

Route::post('/api/test', function ($request) {
	// do something with $request with POST method
});

Route::delete('/api/test', function ($request) {
	// do something with $request with DELETE method
});

Route::put('/api/test', function ($request) {
	// do something with $request with PUT method
});

Route::patch('/api/test', function ($request) {
	// do something with $request with PATCH method
});

Route::option('/api/test', function ($request) {
	// do something with $request with OPTION method
});
```