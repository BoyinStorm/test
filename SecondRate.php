<?php

class SecondRate implements Strategy
{
    public $amount;
    public $rate = 5;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getTotalAmount()
    {
        return $this->amount + $this->amount * $this->rate / 100;
    }
}