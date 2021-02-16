<?php
include 'Order.php';

$order = new ORder (new FiveRate());
$order->setRate();
echo $order->rate;
