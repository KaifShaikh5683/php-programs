<?php
// Operators : Operators are symbol which are used to perform operation on Operands .

// Types of Operators
//1. Arithemetic Operator (+, -, *, /, %)
$x = 10;
$y = 20;

var_dump($x + $y);
echo $x - $y .PHP_EOL;
echo $x * $y .PHP_EOL;
echo $x / $y .PHP_EOL;
echo $x % $y .PHP_EOL;

//2.Assingment Operator (+=, -=, *= /= ,%=)
echo $x += 5 .PHP_EOL;
echo $y -=5 .PHP_EOL;
echo $x *= 10 .PHP_EOL;

//3.Comparision/Relational Operator (==(equality)), (<, >, <=, >=)
echo $x == $y .PHP_EOL; // To check values are equal or not
echo $x === $y .PHP_EOL; //Equality in datatype and value 
echo $x != $y .PHP_EOL; //<>
echo $x !== $y .PHP_EOL; //not identical

echo $x < $y .PHP_EOL;
echo $x > $y .PHP_EOL;
echo $x <= $y .PHP_EOL;
echo $x >= $y .PHP_EOL;

//4. Logical Operators : &&(AND), ||(OR), !
$age = 19;
$hasID = false;
var_dump($age > 18 && $hasID === false); // && : both condition must be true.
echo $x > 5 && $y > 10 .PHP_EOL;

// Comparision Operator .
var_dump(10 <=> 20); // Left val (l) , right val (r) l < r : -1 , l > r : 1, l = r : 0

// 4) Incre/Dcre Operators: counter
$a = 12;
$a++; // Post increment : add 1 to the value.
++$a; // Pre increment : add 1 before the last ans .
echo $a;

// 6) String Operator : . , .=
$name = "Kaif";
$surname = "Shaikh";
echo $name." ".$surname;
$name .= "Shaikh";
echo $name;

// 7) Ternary Operator : decision-making
// $container = (condition)? value_if_true : value_if_false ;

$age = 19;
$result = ($age > 18)? "You can vote" : "You are not eligible yet";
echo $result;

?>