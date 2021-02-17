<?php

include 'Strategy.php';
include 'FirstRate.php';
include 'SecondRate.php';
include 'ThirdRate.php';
include 'DisplayTotal.php';

if (isset($_GET['rate1'])) {
    $order = new DisplayTotal(new FirstRate($_GET['amount']));
    $order->display();
}

if (isset($_GET['rate2'])) {
    $order = new DisplayTotal(new SecondRate($_GET['amount']));
    $order->display();
}

if (isset($_GET['rate3'])) {
    $order = new DisplayTotal(new ThirdRate($_GET['amount']));
    $order->display();
}
?>

<input type="button" onclick="history.back(); return false;" value="Назад">
