<?php

function print_task($text) {
    $c[0] = rand(150, 256);
    $c[1] = rand(150, 256);
    $c[2] = rand(150, 256);
    echo "<table width='40% border='0'>";
        echo "<tr>";
            echo "<td style=background-color:rgb($c[0],$c[1],$c[2]);>&nbsp $text</td>";
        echo "</tr>";
    echo "</table>";
    echo "<br>";
}

function print_string($str, $text = "empty") {
    echo "&nbsp&nbsp $text " . "$str" . "<br>";
    echo "----------------------------------------------------------------------------------------------------" . "<br><br>";
}

function print_array($arr, $text = "empty") {
    echo "&nbsp&nbsp $text" . "<br>";
    echo "----------------------------------------------------------------------------------------------------" . "<br>";
    foreach ($arr as $key => $value) {
        echo "&nbsp&nbsp [$key] = $value" . "<br>";
    }
    echo "----------------------------------------------------------------------------------------------------" . "<br><br>";
}



print_task("Task 1");

for ($i = 0; $i < 10; $i++) {
    $arr_1[$i] = rand(1, 100);
}
print_array($arr_1, "Array with random numbers");

foreach ($arr_1 as $key => $value) {
    if ($key % 2 == 0) {
        $arr_even_index_1[$key] = $value;
    } else {
        $arr_odd_index_1[$key] = $value;
    }
}
print_string(array_product(array_filter($arr_even_index_1)), "Array product");
print_array(array_filter($arr_odd_index_1), "Odd indexes from $arr_1");



print_task("Task 2");

$arr_2[one] = rand(1, 100);
$arr_2[two] = rand(1, 100);

$result_2[sum] = ($arr_2[one] + $arr_2[two]);
$result_2[prod] = ($arr_2[one] * $arr_2[two]);

print_string($result_2[sum], "$arr_2[one] + $arr_2[two] = ");
print_string($result_2[prod], "$arr_2[one] * $arr_2[two] = ");



print_task("Task 3");

$arr_3[one] = rand(1, 100);
$arr_3[two] = rand(1, 100);
$arr_3[three] = rand(1, 100);

$result_3[mean] = array_sum($arr_3) / count($arr_3);

print_string($result_3[mean], "$arr_3[one] + $arr_3[two] + $arr_3[three] / " . count($arr_3) . " = ");



print_task("Task 4");

$a_4 = rand(1, 100);

$result_4[30] = $a_4 + (($a_4 / 100) * 30);
$result_4[120] = $a_4 + (($a_4 / 100) * 120);

print_array($result_4, "$a_4 + %");



print_task("Task 5");

$arr_5[Egypt] = 10;
$arr_5[Italy] = 12;
$arr_5[discount] = 5;
$arr_5[costs_tmp] = $_POST['days'] * 400;

if (isset($_POST['country']) && isset($_POST['days'])) {
    if ($_POST['country'] == 'Egypt') {
        $arr_5[costs] = $arr_5[costs_tmp] + (($arr_5[costs_tmp] / 100) * $arr_5[Egypt]);
    } elseif ($_POST['country'] == 'Italy') {
        $arr_5[costs] = $arr_5[costs_tmp] + (($arr_5[costs_tmp] / 100) * $arr_5[Italy]);
    } else {
        $arr_5[costs] = $arr_5[costs_tmp];
    }

    if ($_POST['discount'] == true) {
        $arr_5[costs_total] = $arr_5[costs] - (($arr_5[costs] / 100) * $arr_5[discount]);
    } else {
        $arr_5[costs_total] = $arr_5[costs];
    }

    print_array($arr_5, "debug: ");

    $result_5 = "Total costs: " . $arr_5[costs_total];
} else {
    $result_5 = "Please select country and days";
}
?>

<html>
    <body>
        <form id="tour" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input form="tour" type="reset" value="Reset">
            <br><br>
            <select form="tour" name="country" size="1" required>
                <option selected disabled>Select country</option>
                <option value="Turkey">Turkey</option>
                <option value="Egypt">Egypt</option>
                <option value="Italy">Italy</option>
            </select>
            <br>
            <input form="tour" name="days" type="number" size="3" maxlength="3" placeholder="Vacation days count" required>
            <br>
            Discount <input name="discount" type="checkbox" value="true">
            <br><br>
            <input form="tour" type="submit" value="Result">
        </form>
        <h3><?=$result_5?></h3>
    </body>
</html>



<?php
print_task("Task 6");
?>

<html>
    <body>
        <form id="login" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input form="login" name="username" type="text" size="16" maxlength="16" placeholder="UserName" required>
            <input form="login" name="passwd" type="password" size="32" maxlength="32" placeholder="SecurePasswd" required>
            <br>
            <input form="login" name="email" type="email" size="30" maxlength="30" placeholder="Email" required>
            <br>
            <input form="login" type="reset" value="Reset">
            <input form="login" type="submit" value="Registration">
        </form>
    </body>
</html>

<?php
if (isset($_POST['username']) && isset($_POST['passwd']) && isset($_POST['email'])) {
    $arr_6[username] = $_POST['username'];
    $arr_6[passwd] = $_POST['passwd'];
    $arr_6[email] = $_POST['email'];

    echo "Регистрация прошла успешно" . "<br>";
    echo "Username: " . $arr_6['username'] . "<br>";
    echo "Password: " . $arr_6['passwd'] . "<br>";
    echo "Email: " . $arr_6['email'] . "<br>";
}

?>

<?php
print_task("Task 7");
?>

<html>
    <body>
        <form id="printN" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input form="printN" name="count" type="number" size="3" maxlength="3" placeholder="Num" required>
            <input form="printN" type="submit" value="PrintN">
            <br>
        </form>
    </body>
</html>

<?php

$a_7 = $_POST['count'];

if (isset($a_7)) {
    if (is_numeric($a_7)) {
        for ($i = 1; $i <= $a_7; $i++) {
            echo "$i" . ": " . "Silence is golden" . "<br>";
        }
    } else {
        echo "Bad n";
    }
}
?>

<?php
print_task("Task 8");

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        $arr_8[$i] = 0;
    } else {
        $arr_8[$i] = 1;
    }
}
print_array($arr_8, "Array");

?>

<?php
print_task("Task 9");

for ($i = 0; $i < 10; $i++) {
        $arr_9[$i] = rand(1, 5);
}
print_array($arr_9, "Array");
print_array(array_count_values($arr_9), "Array count values");

?>

<?php
print_task("Task 6.1");

?>

<html>
    <body>
        <form id="calc" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input form="calc" type="reset" value="reset">
            <input form="calc" name="num1" type="number" placeholder="Input 1st number" required>
            <select form="calc" name="action" size="1" required>
                <option selected disabled>Select action</option>
                <option value="f61_add">+</option>
                <option value="f61_sub">-</option>
                <option value="f61_mult">*</option>
                <option value="f61_div">/</option>
                <option value="f61_perc">%</option>
            </select>
            <input form="calc" name="num2" type="number" placeholder="Input 2nd number" required>
            <input form="calc" type="submit" value="=">
        </form>
    </body>
</html>

<?php
function f61_add($a_61, $b_61) {
    return $a_61 + $b_61;
} 

function f61_sub($a_61, $b_61) {
    return $a_61 - $b_61;
} 

function f61_mult($a_61, $b_61) {
    return $a_61 * $b_61;
} 

function f61_div($a_61, $b_61) {
    return $a_61 / $b_61;
} 

function f61_perc($a_61, $b_61) {
    return ($b_61 / 100) * $a_61;
} 

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    if ($_POST['action'] == 'f61_add') {
        echo f61_add($_POST['num1'], $_POST['num2']);
    } elseif ($_POST['action'] == 'f61_sub') {
        echo f61_sub($_POST['num1'], $_POST['num2']);
    } elseif ($_POST['action'] == 'f61_mult') {
        echo f61_mult($_POST['num1'], $_POST['num2']);
    } elseif ($_POST['action'] == 'f61_div') {
        echo f61_div($_POST['num1'], $_POST['num2']);
    } elseif ($_POST['action'] == 'f61_perc') {
        echo f61_perc($_POST['num1'], $_POST['num2']);
    }
} else {
    echo "Select operation and input nubmers";
}

?>


<?php
print_task("Task 6.2");
?>

<html>
    <body>
        <form id="recurs" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input form="recurs" name="r_count" type="number" size="3" maxlength="3" placeholder="Num" required>
            <input form="recurs" type="submit" value="recurs">
            <br>
        </form>
    </body>
</html>


<?php
function recurs($a_62) {
    if ($a_62 > 0) {
        echo $a_62 . " ";
        return $a_62 + recurs($a_62 - 1);
    }
} 
 
$a_62 = $_POST['r_count'];
if (isset($a_62)) {
    echo "= " . recurs($a_62);
}
?>