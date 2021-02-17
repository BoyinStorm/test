<?php

class ThirdRate implements Strategy
{
    public $amount;
    public $rate = 20;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getTotalAmount()
    {
        return $this->amount + $this->amount * $this->rate / 100;
    }
}