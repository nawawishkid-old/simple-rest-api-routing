<?php

class Request
{
	use Singleton;

	private static $instance;
	private $method;
	private $uri;

	public function __construct(array $args)
	{
		$this->method = strtoupper($args['method']);
		$this->uri = $args['uri'];
		$this->queryString = $args['query_string'];
	}

	public function __get($name)
	{
		return $this->{$name};
	}

}

