<?php

echo "First PHP webpage";
echo  "<br>";
echo "First PHP webpage";
$a = 7;
$b ="This is spartan";
$c = "Persia King";
$d = 10;
echo  "<br>";
echo "$a";
echo  "<br>";
echo "$b";
echo  "<br>";
echo "$c";
$s = $a + $d;
$p = $a * $d;
$div = $a / $d;
$m = $d - $a;
$rem = $d % $a;

echo "<br>";
echo "<hr>";
echo "<strong>Mathematical</strong>";
echo "<br>";
echo "$s";
echo "<br>";
echo "$p";
echo "<br>";
echo "$div";
echo "<br>";
echo "$m";
echo "<br>";
echo "This is the result of div ".$rem;
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<strong>Conditional statement</strong>";
echo "<br>";

if($a > $d){
    echo "a is greater than d";
}
elseif($a == $d){
    echo "a is equal to d";
}
else{
    echo "a is lesser than d";
}



//One line comment


/*
Multiple line comments
*/


echo "<br>";
echo "<hr>";
echo "<strong>Arrays(in PHP, you can put elements of different datatypes in an array)</strong>";

$index_array = ['A', 'b', 'Big Man', 4.44, 007];
echo "<br>";
echo $index_array[0];
echo "<br>";
echo $index_array[1];
echo "<br>";
echo $index_array[2];
echo "<br>";
echo $index_array[3];
echo "<br>";
echo $index_array[4];
echo "<br>";
echo "<br>";
echo "<hr>";

echo "<strong>Associative Arrays(Called Maps or dictionaries in other languages)</strong>";
echo "<br>";

$associative_array = ["batman" => 1, "Superman" => 10, "Thanos" => 8, 12 => "Santa"];
echo $associative_array["Superman"];
echo "<br>";
echo $associative_array["batman"];
echo "<br>";
echo $associative_array["Thanos"];
echo "<br>";
echo $associative_array[12];
echo "<br>";
echo "<hr>";
echo "<br>";


echo "<strong>Loop(for loop)</strong>";
echo "<br>";

for($i=0; $i < 20; $i++){
    echo "<br>";
    echo $i;
}
echo "<br>";

for($i = 1; $i <= 100; $i++){
    echo "<br>";
    if($i % 3 == 0 && $i % 5 == 0){
        echo "Site";
    }
    elseif($i % 5 == 0){
        echo "Host";
    }
    elseif($i % 3 == 0){
        echo "SiteHost";
    }
    else{
        echo $i;
    }
}
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<strong>Loop(while loop)</strong>";
echo "<br>";
$p = 100;
$n = 1;
while($n < $p){
    echo $n;
    echo "<br>";
    $n++;
}

echo "<br>";
echo "<br>";
$p = 100;
$n = 1;
while($n <= $p){
    echo $n;
    echo "<br>";
    $n++;
}

echo "<br>";
echo "<br>";
$p = 100;
$n = 1;
while($n <= $p){
    if($n % 3 == 0 && $n % 5 == 0){
        echo "BigWally";  
    }
    elseif($n % 3 == 0){
        echo "Big";
    }
    elseif($n % 5 == 0){
        echo "Wally";
    }
    else{
        echo $n;
    }
    echo "<br>";
    $n++;
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<strong>Loop(foreach loop)</strong>";
echo "<br>";
$associative_array = ["batman" => 1, "Superman" => 10, "Thanos" => 8, 12 => "Santa"];
foreach($associative_array as $ar){
    echo $ar;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<hr>";
echo "<strong>Function</strong>";
echo "<br>";

function hello(){
    echo "Hey, checkout the sunset";
}

hello();
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<strong>Form and verbs</strong>";
echo "<br>";

if(isset($_REQUEST['username'])){
    echo "Hello " . $_REQUEST['username'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="username">
        <button type="submit">Click Me!!</button>
    </form>
</body>
</html>