<?php
// Q1. WAP to calculate the final price of an item. Start with a price of 100 and a discount of 15%. Use arithmetic operators to calculate and print the final value.

$item_price = 100;
$discount = 15;

$discount_price = ($item_price * $discount) / 100;

$final_price = $item_price - $discount_price;

var_dump($final_price);


// Q2. WAP to manipulate a player's score. Start with $score = 50. Use shorthand assignment operators to first add 20 to the score, then divide the result by 2, and print the final score.

$score = 50;

$result = $score += 20;

var_dump($result);

echo $result / 2;

// Q3. WAP to compare an integer PIN $secretPin = 1234 against a string input $userInput = "1234". Use var_dump() with both the equal (==) and identical (===) comparison operators to show the difference.

$secretPin = 1234;
$userInput = "1234";

var_dump($secretPin == $userInput);
var_dump($secretPin === $userInput);

//  Q4. WAP to check whether a number is greater or lesser than 100 using ternary operator.

$num = 50;
$result = ($num > 100)? "It is Greater than 100" : "It is less than 100 ";
var_dump($result);

//  Q5. WAP to trace the behavior of increment operators. Initialize $x = 5. Assign $y = $x++ and then $z = ++$x. Print the final values of $x, $y, and $z.
$x = 5;
$y = $x++;
$z = ++$x;

var_dump($x, $y, $z);

// Q6. WAP to combine strings. Create variables for a first name ("John") and a last name ("Doe"). Concatenate them with a space into a single variable $fullName, then use a concatenation assignment operator to append " Jr." to the end.
$name = "John";
$last_name = "Doe";

$fullname = $name." ".$last_name;

var_dump($fullname);

$fullname.= " Jr";

var_dump($fullname);

// Q7. WAP to demonstrate the spaceship operator (<=>). Use it to compare 10 and 20, 20 and 20, and 30 and 20. Print the outputs consecutively.
var_dump (10 <=> 20);
var_dump (20 <=> 20);
var_dump (30 <=> 20);

// Q8. WAP to check user login status using a shorthand method. Evaluate a boolean variable $isLoggedIn. Use the ternary operator to assign "Welcome back!" if true, or "Please log in." if false, and print the message.

$isLoggedIn = true;
$result = ($isLoggedIn == true)? "Welcome Back" : "Please Log in";

var_dump($result);

//  Q9. WAP to check if a number is odd or even. Use the modulus operator (%) along with a ternary operator to evaluate $number = 15 and print whether it is "Even" or "Odd".

$num = 8;
$result = ($num%2==0)? "Is an even number" : "Is an odd number";
var_dump($result);

?>