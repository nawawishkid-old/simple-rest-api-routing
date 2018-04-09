<?php

namespace Me;


trait Singleton
{
	public static function singleton() 
	{
		if (is_null(self::$instance))
			self::$instance = new self();

		return self::$instance;
	}
}

