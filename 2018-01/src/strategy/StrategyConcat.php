<?php

namespace strategy;

class StrategyConcat implements StrategyInterface
{

    public static function doOperation(int $p1, int $p2, int $p3)
    {
        return ''.$p1.$p2.$p3;
    }
}