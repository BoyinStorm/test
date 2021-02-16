<?php
include 'Strategy.php';

$order = new DisplayTotal (new FirstOrder(20));
$order->Display();

$order = new DisplayTotal (new FirstOrder(5));
$order->Display();

