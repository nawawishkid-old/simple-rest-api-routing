<?php

trait Singleton
{
	public static function singleton(array $args = []) 
	{
		if (is_null(self::$instance))
			self::$instance = new self($args);

		return self::$instance;
	}
}

