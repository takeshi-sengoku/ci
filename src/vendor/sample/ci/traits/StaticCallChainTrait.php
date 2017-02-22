<?php

namespace sample\ci\traits;

trait StaticCallChainTrait {
	public static function __callStatic ($method, $arguments) {
		static::$method(...$arguments);
		return get_called_class();
	}
}
