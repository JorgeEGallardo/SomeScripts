<?php

use PhpParser\Node\Expr\Print_;

$date = "2019-9-01";
$time = date("D", strtotime('sunday this week', strtotime($date)));
$i = 3;
$time = date("Y-m-d", strtotime("+" . $i . "days", strtotime($date)));
print($time);
for ($i = 0; $i < 20; $i++) {
    $firstday = date('2019-08-26');
    $lastDay  = date('2019-08-26');
    $Fechain = date("Y-m-d", strtotime("+" . $i . "days", strtotime($firstday)));
    print($Fechain."<br>");
    $QueryExival = "INSERT INTO EXIVAL (VALOR, BD, FECHA) VALUES (2,'awa', '$Fechain');";
    print($QueryExival);
}
