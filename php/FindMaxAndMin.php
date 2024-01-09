<?php

class MinMax
{
    private $values;
    private $min;
    private $max;
    private $num;

    public function __construct()
    {
        $this->values = [23, 34, 67, 10, 789, 45, 100, 500, 98];
        $this->num = count($this->values);
        $this->min = 0;
        $this->max = 0;
    }
    private function Find()
    {
        array_multisort($this->values);

        $this->min = $this->values[0];
        $this->max = $this->values[$this->num - 1];
    }
    public function GetMinMax()
    {
        $this->find();
        echo 'Min: ' . $this->min . ' Max: ' . $this->max;
    }
}

$MinMax = new MinMax();
$MinMax->GetMinMax();
