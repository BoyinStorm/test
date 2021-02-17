<?php
include 'Strategy.php';
include 'FirstRate.php';
include 'SecondRate.php';
include 'ThirdRate.php';
include 'DisplayTotal.php';

$order = new DisplayTotal (new FirstRate(100));
$order->Display();

$order = new DisplayTotal (new ThirdRate(500));
$order->Display();

