<?php

//array_slice($_SERVER['argv'], 2);

$ret1 = AtA::push(1)->push('+')->push(1)->calc();
$ret2 = BtB::push(1)->push('+')->push(1)->calc();

var_dump($ret1, $ret2, $ret1 === $ret2);

こわれたこーど
