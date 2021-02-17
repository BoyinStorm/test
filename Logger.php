<?php

class Logger implements SplObserver
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function update(SplSubject $subject)
    {
        $entry = date("Y-m-d H:i:s") . ": товар на сумму {$subject->instance->getTotalAmount()}" . "'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);
    }
}