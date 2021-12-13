<?php

echo "hello biatch" . "<br>";

echo 6+2;

echo "<br>";

?>

<?php
echo "yeah works"

?>

<?php

$name = "Reza";

echo $name . "<br>";

var_dump($name);

echo "<br>";

var_dump(var_dump($name));

echo "<br>";

$num = 243;

var_dump((int)$num);

echo "<br>";

$a = 1;
$b = (int) $a;

var_dump($b);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$a = true;
$b = false;

if(!$a){
    echo "<br> a echoed.";
}

if(!$b){
    echo "<br> b echoed.";
}

echo "<BR>";

$d = ($c = 4) +2;
echo "<BR>";

var_dump($d, $c);

$users = array(
    "user1"=>"reza",
    "user2"=> "ali"
);


print_R($users);

// better
$users = [
    "abc",
    "dd",
    5454,
    true
];

print_r($users);

define("NUMBA",54545);

echo NUMBA;

const NUMBA2 = 54545;

echo NUMBA2;


// 

/*

*/


$glass = "blue";

$res = $glass == "blue" ? "resblue" : "resred";

echo $res;

echo "<br>";
function sum($a, $b = 0){
    var_dump($a + $b);
}

sum(1);
sum(4,5);


$a = 10;
$b = 3;

function sem($a, $b){
    var_dump($GLOBALS);
    echo $a + $b;
}



echo "<br>";
echo "<br>";


$list = ["ali" =>13, "rez" => 0, "mar"=> 16];
sort($list);
var_dump($list);
?>