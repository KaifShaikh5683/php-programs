<?php
$n = (int)readline('Enter a number : ');
$m = (int)readline('Eter a number : ');
$result = $m + $n;
echo $result;


$n = (int)readline('Enter a number : ');
$m = (int)readline('Eter a number : ');
$result = $m + $n;
echo $result;

//The Task: Prompt the user to enter the radius of a circle. Convert the input to a float. Calculate and display the area (π r²) and circumference (2π r).
//Expected Output: Both results formatted as floats.

$r=(float)readline('Enter the radius : ');
$Area = pi()*$r*$r;
$Circumference = 2*pi()*$r;
echo "Area = " .(float)$Area .PHP_EOL;
echo "Circumference = " .(float)$Circumference .PHP_EOL;

// Problem 2: Simple Voting Eligibility Check
// The Task: Prompt the user to enter their age. Convert the input to an integer. Check if the age is 18 or older.
// Expected Output: Print "Eligible to vote" if true, or "Not eligible to vote" if false.

$age = (int)readline("Enter Your Age : ");
if($age>=18){
  echo "Eligible to vote";
}else{
  echo "Not eligible to vote";
}

//  Problem 3: Boolean Toggle Test
// The Task: Prompt the user to enter 1 or 0 to toggle a server setting. Convert the input explicitly to a boolean.
// Expected Output: Use var_dump() to display the final boolean value (true or false)

$b = (bool)readline('Enter 1 or 0 : ');
var_dump($b);

// Problem 4: Splitting the Bill
// The Task: Ask for the total bill amount (convert to float) and the number of guests (convert to integer). Divide the bill equally.
// Expected Output: Display the exact amount each guest owes.

$Total_bill = (float)readline("Enter the Total Bill Amount : ");
$guest =(int)readline("Total number of Guest : ");
$result = $Total_bill / $guest;
echo "Exact Amount Each guest has to pay is : " .$result;

// Problem 5 : Take the Table no from user and print the table from 1 to 10

$Table_No=(int)readline("Enter a number : ");
$c = 1;
while($c<=10){
  echo $Table_No ."X" .$c ."=" .($Table_No*$c) .PHP_EOL;
  $c++;
}
?>