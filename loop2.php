<?php
$j = 2;
for ($i=0; $i <= 10; $i++) { 
    $k = $j*$i;
    echo $j.' x '.$i.' = '.$k."<br>";
}

echo "<br>";

for ($i=0; $i < 10; $i++) { 
    echo $i;
}
echo "<br>";
for ($i=0; $i <= 10; $i=$i+2) { 
    echo $i;
}

echo "<br>";

$a = 3;
for($j=1; $j <=10; $j++){
    $k = $j*$a;
    echo $a.' X '.$j.' = '.$k.'<br>';
}
echo "<br>";
$b = 5;
while($b < 20){
    echo $b;
    $b++;
}

echo "<br>";
$c = 1;
do{
    echo $c;
    $c++;
}while($c < 10);








?>