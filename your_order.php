<?php

include 'Classes/Strategy.php';
include 'Classes/FirstRate.php';
include 'Classes/SecondRate.php';
include 'Classes/ThirdRate.php';
include 'Classes/DisplayTotal.php';
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
