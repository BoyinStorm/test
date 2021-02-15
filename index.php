<?php
include 'Strategy.php';

$order = new DisplayTotal(new SecondOrder(20));
$order->SetAmount();
$order->GetTotalAmount();
$order->Display()


?>