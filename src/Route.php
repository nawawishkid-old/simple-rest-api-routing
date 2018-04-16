<?php

class Route
{

	protected static $GET = [];
	protected static $POST = [];
	protected static $DELETE = [];
	protected static $PUT = [];
	protected static $PATCH = [];
	protected static $OPTION = [];

	public static function run(Request $request)
	{
		$uri = $request->uri;

		if (! in_array($uri, array_keys(self::${$request->method}))) {
			throw new Exception(sprintf('"%s" is not a valid method', $request->method));
		}

		self::${$request->method}[$uri]($request);
		return true;
	}

	public static function get($path, $callback)
	{
		self::enqueueAction('GET', $path, $callback);
	}

	public static function post($path, $callback)
	{
		self::enqueueAction('POST', $path, $callback);
	}
	
	public static function delete($path, $callback)
	{
		self::enqueueAction('DELETE', $path, $callback);
	}
	
	public static function put($path, $callback)
	{
		self::enqueueAction('PUT', $path, $callback);
	}
	
	public static function patch($path, $callback)
	{
		self::enqueueAction('PATCH', $path, $callback);
	}
	
	public static function option($path, $callback)
	{
		self::enqueueAction('OPTION', $path, $callback);
	}

	private static function enqueueAction(string $method, string $path, callable $callback)
	{
		$method = strtoupper($method);

		if (! in_array($method, ['GET', 'POST', 'DELETE', 'PUT', 'PATCH', 'OPTION'])) {
			throw new InvalidArgumentException(sprintf('"%s" is not a valid method', $method));
		}

		self::${$method}[$path] = $callback;
	}
}

