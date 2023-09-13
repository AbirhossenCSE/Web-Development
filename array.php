<?php
$number = array(10,20,30);
print_r($number);

echo "<br>";
var_dump($number);
echo "<br>";

$car = array(10,12,14);
foreach($car as $value){

    echo $value.'<br>';
}
echo "<br>";


$num = array(
    array(10,20),
    array(30,40)
);
foreach($num as $value){
    foreach($value as $value2){
        echo $value2.'<br>';
    }
}

echo "<br>";


$foodbusket = array(
    'food'=>array('grill','nun','cap'),
    'fruit'=>array('am','jam','licu'),
    'drinks'=>array('cocacola','pepsi','7up')
);
foreach($foodbusket['food'] as $value){
    echo $value.'<br>';
}
?>