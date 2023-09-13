<?php
for ($i=0; $i <= 10; $i++) { 
    echo $i."<br>";
}
echo "<br>";

for ($i=0; $i <=10 ; $i=$i+2) { 
    echo $i."<br>";
}

echo $i."<br>";

$a = 1;
while ($a <= 10) {
   echo $a."<br>";
   $a++;
}

echo "<br>";
echo "<br>";

$b = 1;
do {
    echo $b."<br>";
    $b++;
} while ($b <= 10);

echo "<br>";
echo "<br>";

for ($i=0; $i <= 100; $i++) { 
    if ($i%2 == 0) {
        echo "even".$i."<br>";
    }
}
?>