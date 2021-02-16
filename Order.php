<?php
Interface SetRate{
    public function setRate();
}

Class FiveRate implements SetRate{

    public $rate;

    public function setRate(){
        return $this->rate = 5;
    }

    public function __toString(){
        return $this->rate;
    }

}

Class Order{

    public $rate;

    public function __construct(SetRate $rate){
        $this->rate=$rate;
    }

    #public function setRate();
}