<?php
echo "Hello World <br>";

$show = "I am Abir<br>";


echo $show;
$number = 10;
echo $number;
$word1 = "Hero";
$word2 = "Alom";
echo "<br>Sajib is a ".$word1." ".$word2." fan";


$x = 10;
echo ++$x;
echo "<br>";
echo --$x;
echo --$x;


function raisul(){
    echo "lagaw"."<br>";
}
raisul();
raisul();
raisul();
raisul();


function add(){
    $x = 10;
    $y = 5;
    echo $x+$y;
}
add();


function add($x, $y){
    echo $x+$y."<br>";

}
add(10,6);
add(11,3);
add(32,2);



define('pi', 3.1416);
    echo pi;



$x = "abir";
function abc(){
    global $x;
    echo $x;
}
abc();


$x = 10;
$y = 12;
$z = $x+$y;
echo $z;


function abir(){
    $x = 11;
    $y = 12;
    $z = $x+$y;
    echo $z;
}
abir();


function abir($x, $y){
    echo $x+$y;
}
abir(3,6);

define ('sj', 25);
echo sj;


?>