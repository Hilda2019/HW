<?php

echo " Task 1." . "<br>";

$a = array();
$b = "prime";

for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) == 0) {
            $b = "not prime";
    }
}

if ($b == "prime") $a[] = $i;
else $b = "prime";
}
foreach($a as $list) echo $list . "";

echo "<br>" . "<br>";

echo " Task 2." . "<br>";

$cc = 0;
for ($ii = 1; $ii <= 100; $ii++) {
    $nn = rand(1, 1000);
    if ( ( $nn % 2 ) == 0 ) {
        ++$cc;
        echo "$ii: $nn <br>"; //выводит все четные числа
    }
}

echo "<br>";
echo "Количество четных цифр: $cc";
echo "<br><br>";

echo " Task 3." . "<br>";

$ccc1 = 0; 
$ccc2 = 0;
$ccc3 = 0;
$ccc4 = 0;
$ccc5 = 0;

for ($iii = 1; $iii <= 100; $iii++) {
    $nnn = rand(1, 5);
    if ($nnn == 1) {
        ++$ccc1;
    } elseif ($nnn == 2) {
        ++$ccc2;
    } elseif ($nnn == 3) {
        ++$ccc3;
    } elseif ($nnn == 4) {
        ++$ccc4;
    } elseif ($nnn == 5) {
        ++$ccc5;
    }
}

echo "ccc1: $ccc1" . "<br>";
echo "ccc2: $ccc2" . "<br>";
echo "ccc3: $ccc3" . "<br>";
echo "ccc4: $ccc4" . "<br>";
echo "ccc5: $ccc5" . "<br>";
echo "<br><br>";


echo " Task 4." . "<br>";

echo "<table border='1'>";
for ($a=0; $a<3; $a++){ // к-во строк
    echo "<tr>";
    for ($b=1; $b<=5; $b++){
        $d = "&nbsp&nbsp&nbsp$b&nbsp&nbsp&nbsp";
        if ( ( $b % 2 ) == 1 ) {
            $c1 = rand(1, 256);
            $c2 = rand(1, 256);
            $c3 = rand(1, 256);

            echo "<td style=background-color:rgb($c1,$c2,$c3);>$d</td>"; //колонки
        } else {
            echo "<td>$d</td>";
        }

    }
}
echo "</tr>";
echo "</table>";
