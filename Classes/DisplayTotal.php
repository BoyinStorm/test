<?php

Class DisplayTotal implements SplSubject
{
    public $instance;
    public $observers;
    public function __construct(Strategy $instance){
        $this->instance = $instance;
        $this->observers = new SplObjectStorage();
    }

    public function display()
    {
        echo "Заказ на сумму: {$this->instance->amount}$; налог:  {$this->instance->rate}%; итого: {$this->instance->GetTotalAmount()}$<br>";
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}