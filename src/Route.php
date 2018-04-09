<?php

namespace Me;

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

		if (! in_array($uri, array_keys(self::${$request->method})))
			return;

		self::${$request->method}[$uri]($request);
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

	private static function enqueueAction($method, $path, $callback)
	{
		self::${strtoupper($method)}[$path] = $callback;
	}
}

