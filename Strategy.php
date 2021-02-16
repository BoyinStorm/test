<?php
Interface Strategy
{
    public function GetTotalAmount();
}

class FirstOrder implements Strategy
{
    public $amount = 100;
    public $rate;
    public $total;

    public function __construct($rate){
        $this->rate=$rate;
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;

    }

}


class SecondOrder implements Strategy
{

    public $amount = 500;
    public $rate;
    public $total;

    public function __construct($rate)
    {
        $this->rate=$rate;
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;
    }

}


Class DisplayTotal
{
    public $instance;

    public function __construct(Strategy $instance){
        $this->instance=$instance;
    }

    public function Display()
    {
        echo "Заказ на сумму: " . $this->instance->amount . '$; ' . "налог: " . $this->instance->rate .'%; ' . "итого: " . $this->instance->GetTotalAmount() . "<br>";
    }
}