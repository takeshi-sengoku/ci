<?php

class BtB {
	use \sample\ci\traits\MethodChainTrait,
	\sample\ci\traits\SugarAccessTrait;

	protected $point = null;
	protected $stack = [];

	protected function length () {
		return count($this->stack);
	}

	protected function push ($stack) {
		$this->stack[] = $stack;
		return $this;
	}

	protected function pop () {
		return array_pop($this->stack);
	}

	protected function move ($point) {
		$this->pointer = $point;
		return $this;
	}

	protected function insert ($value, $point = null) {
		$point = $point ?? $this->pointer ?? $this->length();
		return array_merge(array_slice($this->stack, 0, $point, true), [$value], array_slice($this->stack, $point + 1, true));
	}

	protected function remove ($point = null) {
		$point = $point ?? $this->pointer ?? $this->length();
		return array_merge(array_slice($this->stack, 0, $point, true), array_slice($this->stack, $point + 1, true));
	}

	protected function calc ($end_point = null, $start_point = 0) {
		return EazyCalculator::ExecuteCalcList(array_slice($this->stack, $start_point, $end_point ?? $this->length()));
	}
}
