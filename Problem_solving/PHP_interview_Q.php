<?php

//76. Write a PHP program to determine whether a number is positive, negative, or zero. 
//Answer: Use an if-elseif-else structure to compare the number with zero. 

$n=(int)readline("Enter a number : ");
if($n > 0){
    echo "The number is Positive";
}elseif($n < 0){
    echo "The number is Negative";
}else{
    echo "The number is Zero";
}

//77. Write a PHP program to find the largest of three numbers using conditional 
//statements. 
//Answer: Compare the three values using if-elseif-else conditions and display the greatest value. 

$n1=(int)readline("Enter a number  : ");
$n2=(int)readline("Enter a number  : ");
$n3=(int)readline("Enter a number  : ");

if($n1>$n2 && $n1>$n3){
    echo $n1 ." is the greatest number among 3.";
    }elseif($n2>$n3 && $n2>$n1){
        echo $n2 ." is the greatest number.";
    }else{
        echo $n3 ." is the greatest number.";
        }

//78. Write a PHP program to calculate an employee's bonus based on salary and 
//performance rating. 
//Answer: Accept the salary and rating, select the appropriate bonus percentage using conditional 
//statements, calculate the bonus, and display it. 

$sal=(float)readline("Enter Your Salary : ");
$rating=(float)readline("Enter your performance rating : ");

if($rating >= 4.5 ){
    $bonuspercentage = 20;
}elseif($rating >= 4.0){
    $bonuspercentage = 15;
}elseif($rating >=3.0){
    $bonuspercentage = 10;
}elseif($rating >= 2.0){
    $bonuspercentage = 5;
}

$bonus_sal = $sal * $bonuspercentage / 100;
echo "Bonus Salary : " .$bonus_sal;

//79. Write a PHP program to accept marks of multiple subjects, calculate the percentage, 
//and display the appropriate grade. 
//Answer: Add the marks, calculate the percentage, and use conditional statements to determine 
//the grade.

$a=80;
$b=65;
$c=70;
$d=45;

$percentage = ($a+$b+$c+$d)/400*100;
echo "Percentage : " .$percentage ."\n";
if($percentage>80){
    echo "A Grade";
}elseif($percentage>70 && $percentage<=80){
    echo "B Grade";
}elseif($percentage>=35 && $percentage<=70){
    echo "C Grade";
}else{
    echo "F Grade";
}

//80. Write a PHP function that accepts an array of numbers and returns the largest value. 
//Answer: Iterate through the array, keep track of the largest value, and return it.

function largest($num){
    $largest = $num[0];
    for($i=1; $i<count($num);$i++){
        if($num[$i]>$largest){
            $largest=$num[$i];
        }
    }
    return $largest;
}

$num=[25,10,30,45];
$result = largest($num);
echo "The largest number is : " .$result;

//84. Write a PHP program that displays the multiplication table of a user-entered number. 
//Answer: Accept the number, use a loop from 1 to the required limit, multiply the number by the 
//loop counter, and display each result. 

$num=(int)readline("Enter Table Number : ");
for($i=1;$i<=10;$i++){  
  echo $num ." X " .$i ." = " .( $num * $i );
  
}

//85. Write a PHP program that accepts a user's age and income and determines eligibility 
//based on multiple conditions. 
//Answer: Accept both values and use comparison and logical operators inside conditional 
//statements to determine eligibility.

$sal=(float)readline("Enter Your Salary : ");
$age=(int)readline("Enter your Age : ");
if($age>=18 && $sal>=50000.0){
    echo "Loan Approved \n";
}elseif($age>=18 && $sal>30000.0 && $sal<50000.0){
    echo "Your Application Requires a review ";
}else{
    echo "Not Eligible for Loan ";
}
 
?>
