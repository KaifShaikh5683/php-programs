<?php
// 1. STUDENT INFORMATION PROGRAM
// Create a PHP program that stores a student's name, age, course, and marks in variables.
// Display all the information clearly.
// Also display the data type of each variable.

$student_name = "Kaif Shaikh";
$Age = 22;
$Course = "WDP with PHP";
$Marks = 90;
var_dump($student_name,$Age,$Course,$Marks);

// 2. SIMPLE CALCULATOR FUNCTION
// Create a PHP function named calculate that accepts two numbers and performs addition,
// subtraction, multiplication, and division.
// Display the results for two numbers entered or stored by you.

function calculate( $a, $b){
    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;

}
calculate(5,10);

// 3. EVEN OR ODD
// Create a PHP program that stores an integer in a variable and checks whether the number
// is even or odd.
// Display an appropriate message.

$number =(int)readline("Enter the Number : ");
if($number%2==0){
    echo $number ." Is an Even Number";
}else{
    echo $number ." Is an Odd Number";
}

// 4. STUDENT RESULT

// Create a PHP program that stores marks of three subjects in variables.
// Calculate the total and average marks.
// Then use conditional statements to display:
// - "Pass" if the average is 40 or above
// - "Fail" if the average is below 40

$JAVA =(int)readline("Enter the Marks for JAVA : ");
$Python =(int)readline("Enter the Marks for Python : ");
$PHP =(int)readline("Enter the Marks for PHP : ");
$Total_marks= $JAVA + $Python + $PHP;
$Avg = $Total_marks / 3 .PHP_EOL;

if($Avg>=40){
    echo "Pass" .PHP_EOL;
}else{
    echo "Fail" .PHP_EOL;
}

// 5. FUNCTION-BASED AREA CALCULATOR
// Create a PHP function named calculateArea that accepts length and width as parameters.
// Calculate and display the area of a rectangle using the function.
// Use variables to store the length and width.

function calculateArea(int $length, int $width){
    echo "Area of Rectangle : " .$length * $width;
}

calculateArea(8,5);
?>