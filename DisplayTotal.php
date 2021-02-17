<?php
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