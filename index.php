<?php
require "TimeTravel.php";

$start = new DateTime('1985-12-31 00:00:00');
$end = new DateTime('1986-12-12 00:00:00');
$timeTravel = new TimeTravel($start, $end);
$interval = new DateInterval('P0DT1000000000S');
$step = new DateInterval('P1M8D');
echo 'Get travel info :';
echo '<br/>';
echo $timeTravel->getTravelInfo();
echo '<br/>';
echo '<br/>';
echo 'Find date :';
echo '<br/>';
print_r($timeTravel->findDate($interval));
echo '<br/>';
echo '<br/>';
echo 'Back to the future step by step :';
echo '<br/>';
var_dump($timeTravel->backToFutureStepByStep($step));

