<?php


echo " Task 1." . "<br>";
echo '<a href="https://github.com/Hilda2019/HW/blob/master/hw2.php" target="_blank">Home work #2 at github</a>';
echo "<br>" . "<br>";

echo " Task 2." . "<br>";
echo "Done."; // набраная часть слайдов в конце страницы
echo "<br>" . "<br>";

echo " Task 3." . "<br>";

$var=55;
$var1=42;
echo ($var > $var1) ? "$var > $var1" : "$var < $var1";
echo "<br>";

$g = rand(5, 15);
$g1 = rand(5, 15);
echo $var2=$g; echo "<br>";
echo $var3=$g1; echo "<br>";
echo $var2 > $var3? "$var2 > $var3" : ($var2 == $var3? "$var2 = $var3" : "$var2 < $var3");
echo "<br>" . "<br>";
if ($var2 == $var3){ 
    echo 'Сгенерированы одинаковые числа' .  "<br>" . "<br>";
}
else{
    $min_chislo=min($g, $g1);
    echo "Минимальное число=" . $min_chislo . "<br>";
    $max_chislo=max($g, $g1);
    echo "Максимальное число=" . $max_chislo . "<br>";
    echo "<br>";
}

echo " Task 4." . "<br>";

$fio='Журавлева Марина Игоревна';
preg_match_all('/ (.)/iu',$fio,$m);
$m2 = explode(' ', $fio);
echo $m2[0] .' '. $m[1][0]. '.' . $m[1][1].'.' ; echo "<br>";
echo "<br>";


echo " Task 5." . "<br>";

$c5 = rand(1, 99999);
$c5_1 = substr_count($c5, 7);
echo "Рандомное число: $c5 "; echo "<br>";
if ($c5_1 == 2 || $c5_1 == 3 || $c5_1 == 4){
    echo "Число 7 встречается в нем: $c5_1 раза"; echo "<br>";
}
else {
    echo "Число 7 встречается в нем: $c5_1 раз"; echo "<br>";
}
echo "<br>";





/* перенабрать слайды 33 и 34;

echo (int) ((0.1 + 0.7) * 10);
$a = 5;      $b = 6;      $a++;      ++$b;
$a = 1;      $b = 3;      echo $a++ + $b;      echo $a + ++$b;      echo ++$a + $b++;


$a = 'fact_2';         echo ++$a;      //       fact_3

$a = '2nd_fact';    echo ++$a;	       //       2nd_facu

$a = 'a_fact';         echo ++$a;         //       a_facu

$a = 'a_fact?';       echo ++$a;	        //     a_fact?
*/
