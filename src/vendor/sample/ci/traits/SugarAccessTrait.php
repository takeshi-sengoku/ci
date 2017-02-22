<?php

namespace sample\ci\traits;

trait SugarAccessTrait {
	protected $instance = null;

	public static function Factory () {
		$class_path = get_called_class();
		return new $class_path();
	}

	public static function __callStatic($method, $arguments)
	{
		return (static::$instance ?? static::$instance = static::Factory())->$method(...$arguments);
	}
}
