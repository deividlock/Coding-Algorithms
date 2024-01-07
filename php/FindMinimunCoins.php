<?php

class GreedyCoins
{
    private $denominations;
    private $lenghtOfDenominations;

    public function __construct()
    {
        $this->denominations = [1, 2, 5, 10, 20, 50, 100, 500, 1000];
        $this->lenghtOfDenominations = count($this->denominations);
    }
    public function findMinimun($value)
    {
        $coins = [];

        for($i = $this->lenghtOfDenominations - 1; $i >= 0; $i--) {
            while ($value >= $this->denominations[$i]) {
                $coins [] = $this->denominations[$i];
                $value -= $this->denominations[$i];

            }
        }
        var_dump($coins);
    }
}

$coins = new GreedyCoins();
$coins->findMinimun(1573);
