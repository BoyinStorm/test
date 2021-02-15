<?php
Interface OrderCalc
{
    public function setRate();
}

Class FirstRate implements OrderCalc{

    public $rate = 0;
    public $comprate;

    public function setRate(){
        return $this->comprate=$this->rate /100;
    }


}

Class SecondRate implements OrderCalc{
    public $rate = 5;
    public $comprate;

    public function setRate(){
        return $this->comprate=$this->rate / 100;
    }


}

Class ThirdRate implements OrderCalc{
    public $rate = 20;
    public $comprate;

    public function setRate(){
        return $this->comprate=$this->rate / 100;
    }


}

Class Order{
    public $amount;
    public $total;
    public $comprate;

    public function __construct($amount){
        $this->amount=$amount;
}

    public function defineRate(OrderCalc $comprate){
        $this->
    }

    public function GetTotalAmount(){
        return $this->total=$this->amount + $this->comprate;
}
}

