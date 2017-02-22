<?php

namespace sample\ci\traits;

trait MethodChainTrait {
	public function __call($method, $arguments) {
		$this->$method(...$arguments);
		return $this;
	}
}
