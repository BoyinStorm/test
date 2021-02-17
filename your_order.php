<?php

include 'Strategy.php';
include 'FirstRate.php';
include 'SecondRate.php';
include 'ThirdRate.php';
include 'DisplayTotal.php';
include 'Logger.php';

if (isset($_GET['rate1'])) {
    $order = new DisplayTotal(new FirstRate($_GET['amount']));
    $logger = new Logger("logfile.txt");
    $order->attach($logger);
    $order->display();
    $order->detach($logger);
}

if (isset($_GET['rate2'])) {
    $order = new DisplayTotal(new SecondRate($_GET['amount']));
    $logger = new Logger("logfile.txt");
    $order->attach($logger);
    $order->display();
    $order->detach($logger);
}

if (isset($_GET['rate3'])) {
    $order = new DisplayTotal(new ThirdRate($_GET['amount']));
    $logger = new Logger("logfile.txt");
    $order->attach($logger);
    $order->display();
    $order->detach($logger);
}
?>

<input type="button" onclick="history.back(); return false;" value="Назад">
