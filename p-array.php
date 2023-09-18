<?php
$num = array(10,20,30,40,'Abir');
print_r ($num);

echo "<br>";
print_r($num[1]);

echo "<br>";
var_dump($num);

echo "<br>";
$friend = array('Raisul','Sajib','Adib');
    foreach($friend as $value){
        echo $value.'<br>';
    }

echo "<br>";
$friends = array(
    'school'=>array('Shahin','Sajol','Moni','Pappu','Imran'),
    'collage'=>array('Al-amin','Rabbi','Chonchol'),
    'university'=>array('Raisul','Sajib','Adib')
);
foreach($friends['collage'] as $value){
    echo $value.'<br>';
}
echo "<br>";
foreach($friends['school'] as $value){
    echo $value.'<br>';
}
echo "<br>";
foreach($friends['university'] as $value){
    echo $value.'<br>';
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
echo "<br>";
foreach($foodbusket['fruit'] as $value){
    echo $value.'<br>';
}
echo "<br>";
foreach($foodbusket['drinks'] as $value){
    echo $value.'<br>';
}
?>