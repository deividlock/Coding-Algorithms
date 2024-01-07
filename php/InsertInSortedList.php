<?php

class sortedList
{
    protected $list;

    public function __construct()
    {
        $this->list = [25,36,47,58,69,80];
    }
    protected function sortList()
    {
        array_multisort($this->list);
    }
    public function insertValue($value)
    {
        $this->list [] = $value;
        $this->sortList();
    }
    public function printList()
    {
        var_dump($this->list);
    }
}

$list = new sortedList();
$list->printList(25);
$list->insertValue(19);
$list->printList(25);
