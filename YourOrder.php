<?php
include 'Strategy.php';
include 'FirstRate.php';
include 'SecondRate.php';
include 'ThirdRate.php';
include 'DisplayTotal.php';

if(isset($_POST['rate1']))
{
    $order = new DisplayTotal (new FirstRate($_POST['amount']));
    $order->Display();
}
if(isset($_POST['rate2']))
{
    $order = new DisplayTotal (new SecondRate($_POST['amount']));
    $order->Display();
}

if(isset($_POST['rate3']))
{
    $order = new DisplayTotal (new ThirdRate($_POST['amount']));
    $order->Display();
}