<?php

class Request
{
	use Singleton;

	private static $instance;
	private $method;
	private $uri;

	private function __construct()
	{
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->uri = $_SERVER['REQUEST_URI'];
		$this->queryString = $_SERVER['QUERY_STRING'];
	}

	public function __get($name)
	{
		return $this->{$name};
	}

}

