<?php
//1. Create a function that accepts a string and returns the string with its words arranged in reverse order.
//Display the result.


function reverseWords($str)
{
    $words = explode(" ", $str);
    $words = array_reverse($words);
    return implode(" ", $words);
}

$text = readline("Enter a string: ");

$result = reverseWords($text);

echo "Reversed words: " . $result;


//2. Create a function that accepts an array of numbers and returns the second-largest value in the array.
// Display the returned value.

function secondlargest($arr){
    $largest = $arr[0];
    $secondlargest = $arr[0];

    for ($i=1;$i<5;$i++){
        if($arr[$i]>$largest){
            $secondlargest = $largest;
            $largest = $arr[$i];
        }elseif($arr[$i]>$secondlargest && $arr[$i]!=$largest){
            $secondlargest=$arr[$i];
        }
    }
    return $secondlargest;
}
$arr = array(10,25,40,30);
$result = secondlargest($arr);
echo "Second Largest Number is : " .$result ."\n";

// 3. Create a function that accepts the basic salary, allowance percentage, and deduction percentage from the user and returns the final salary after adding the allowance and subtracting the deduction.

function finalsal($b_s, $a_p, $d_p){
  $allowance = $b_s * $a_p / 100;
  $deduction = $b_s * $d_p / 100;
  $finalsall = $b_s + $allowance - $deduction;

  return $finalsall;
}

$a=(float)readline("Enter Your Basic Salary : ");
$b = (int)readline("Enter Your Allowance Percentage : ");
$c = (int)readline("Enter Your Deduction Percentage : ");

$result =  finalsal($a, $b, $c);
echo "Final Salary : " .$result;

//4. Create a function that accepts a number from the user and returns the sum of all prime numbers 
//from 1 up to that number.

function sumOfPrimes($n)
{
    $sum = 0;

    for ($i = 2; $i <= $n; $i++) {

        $count = 0;

        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }

        if ($count == 2) {
            $sum = $sum + $i;
        }
    }

    return $sum;
}

//5. Create a function that accepts a string from the user and returns 
//the first non-repeated character in the string. Display the returned character.


$text = readline("Enter a string: ");

function firstNonRepeated($text)
{
    $length = strlen($text);

    for ($i = 0; $i < $length; $i++) {

        $count = 0;

        for ($j = 0; $j < $length; $j++) {

            if ($text[$i] == $text[$j]) {
                $count++;
            }
        }

        if ($count == 1) {
            return $text[$i];
        }
    }

    return "No non-repeated character found";
}

echo "First non-repeated character: " . firstNonRepeated($text);

?>