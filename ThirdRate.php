<?php
class ThirdRate implements Strategy
{

    public $amount;
    public $rate = 20;
    public $total;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function GetTotalAmount()
    {
        return $this->total = $this->amount + $this->amount * $this->rate / 100;
    }

}