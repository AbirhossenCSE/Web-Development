<?php

$a = 10;
$b = 12;
    if ($a > $b) {
        echo "A is getter than B";
    }
    elseif($b > $a){
        echo "B is getter than A";
    }
    else{
        echo "No one is big";
    }

    echo "<br>";

$t = date("H");
    if ($t > "20") {
        echo "Good morning";
    } else {
        echo "Good night";
    }
    // echo $t;

    echo "<br>";

$age = 10;
    if ($age > 18) {

            if ($age <= 30) {
                echo "You can watch porn now";
            } else {
                echo "Try after 18+";
            }
            
    } else {
        echo "Esob bad de";
    }
    
    echo "<br>";
    echo "<br>";

date_default_timezone_set('Asia/Dhaka');
$time = date("D/M/Y");
echo $time;

echo "<br>";
$time2 = date("d/m/y");
echo $time2;

echo "<br>";
$time3 = date('h/i/s/ a');
echo $time3;

    
?>