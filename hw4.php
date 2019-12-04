<?php
if (isset($_POST['first']) && isset($_POST['second'])){
    $first= $_POST ['first'];
    $mov= $_POST ['mov'];
    $second= $_POST ['second'];

    $result= "$first $mov $second";

    if ($mov=='+'){
        $result = $first+$second;
    }
    if ($mov=='-'){
        $result = $first-$second;
    }
    if ($mov=='*'){
        $result = $first*$second;
    }
    if ($mov=='/'){
        $result = $first/$second;
    }
    if ($first == 0 || $second == 0) {
        echo "Был введен 0.";
    }
    if ($mov=='%'){
        $result = ($first/100) *$second; // % от числа
    }
    if ($mov=='% +') { // действие с %
        $result = (($first/100) *$second) +$second ; 
    }
    if ($mov=='% -') { // действие с  %
        $result = (($first/100) *$second) -$second ; 
    }
    if ($mov=='% *') { // действие с  %
        $result = (($first/100) *$second) *$second ; 
    }
    if ($mov=='% /') { // действие с  %
        $result = (($first/100) *$second) /$second ;  
    }

}else {
    echo "Что посчитать?";  
}
?>

<html>
<head>
<title> Пример обработки ввода </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1><?=$result?></h1>
<form name="form1" action="<?=$_SERVER['PHP_SELF']?>" method="post"> 

<input type="number" name="first">
<input type="text" name="mov" value= "+ - / * %" size="2">
<input type="number" name="second">
<input type="submit" name="=" value="result">

</form>
</body>
</html>
