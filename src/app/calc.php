<?php

namespace app;

use \sample\ci\classes\{
	AtA,
	BtB
};

$ret1 = AtA::push(1)->push('+')->push(1)->calc();
$ret2 = BtB::push(1)->push('+')->push(1)->calc();

echo $ret1, $ret2, $ret1 === $ret2;

class psr2 {
    const psr2 = 'PSR-2違反';

    function Error () {

    }}
