<?php
Interface Strategy
{
    public function GetTotalAmount();
    public function SetAmount();

}

class FirstOrder implements Strategy
{
    public $amount;
    public $rate;
    public $total;


    public function __construct($rate){
        $this->rate=$rate;
    }

    public function SetAmount()
    {
      $this->amount = 100;
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;

    }
    public function Display()
    {
        echo "Заказ на сумму: $this->amount, налог: $this->rate, итого: $this->total";
    }

    }


class SecondOrder implements Strategy
{

    public int $amount;
    public int $rate;
    public $total;

    public function __construct($rate){
        $this->rate=$rate;
    }

    public function SetAmount(){
        return $this->amount = 500;
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;

    }

    public function Display()
    {
        echo "Заказ на сумму: $this->amount, налог: $this->rate, итого: $this->total";
    }
}


Class DisplayTotal{

    public $amount;
    public $rate;
    public $total;

    public function __construct(Strategy $total){
        $this->total=$total;
    }

    public function SetAmount(){
        return $this->amount->SetAmount();
    }

    public function GetTotalAmount()
    {
        return $this->total=$this->amount + $this->amount * $this->rate / 100;

    }

    public function Display(){
        echo "Заказ на сумму: $this->amount, налог: $this->rate, итого: $this->total";
    }
}