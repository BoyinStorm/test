<?php
class FirstRate implements Strategy
{
    public $amount;
    public $rate = 0;
    public $total;

    public function __construct($amount){
        $this->amount=$amount;
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;

    }

}