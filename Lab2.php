<?php
//1.A company calculates an employee's annual bonus based on performance rating and years of service. 
//  Accept the rating and years of service from the user and calculate the bonus according to the given conditions:
//   rating 5 with at least 5 years gets 20% of annual salary, rating 4 with at least 3 years gets 15%,
// rating 3 gets 8%, and all other cases get 3%. 
//   Accept the annual salary and display the bonus amount.

$a=(float)readline("Enter your Annual Salary : ");
$r=(int)readline("Enter your rating : ");
$y=(int)readline("Enter yours years of service : ");

if($r == 5 && $y >= 5){
    echo "Bonus Amount = " .$a * 20 / 100;
}else if($r == 4 && $y >= 3){
    echo "Bonus Amount = " .$a * 15 / 100;
}else if($r == 3){
    echo "Bonus Amount = " .$a * 8 / 100;
}else{
    echo "Bonus Amount = " .$a * 3 / 100;
}

// 2. Accept a student's marks in five subjects.
// Calculate the percentage and assign a result category using multiple conditions:
// 85% or above as Distinction, 70% to below 85% as First Class, 55% to below 70% as Second Class,
// 40% to below 55% as Pass, and below 40% as Fail. Also display the percentage.

$a = (int)readline("Enter your Physics marks = ");
$b = (int)readline("Enter your Chemistry marks = ");
$c = (int)readline("Enter your Maths marks = ");
$d = (int)readline("Enter your Biology marks = ");
$e = (int)readline("Enter your English marks = ");

$t = $a+$b+$c=$d=$e;
$p = $t / 500 * 100;

if($p >= 85){
  echo $p ."%\n";
  echo "Distinction";
}else if($p == 70 ||$p < 85 ){
  echo $p ."%\n";
  echo "First Clas";
}else if($p == 55 || $p < 70){
  echo $p ."%\n";
  echo "Second Class";
}else if($p == 40 || $p < 55){
  echo $p ."%\n";
  echo "Pass";
}else if($p < 40){
  echo $p ."%\n";
  echo "Fail";
}

// 3. Accept the total monthly income and credit score of a loan applicant. 
//Approve the loan only when the income is at least 50000 and credit score is at least 750.
// If income is at least 50000 but the credit score is between 700 and 749,
// display that the application requires review. Otherwise,
// reject the application.
$a = (int)readline("Enter your monthly income = ");
$b = (int)readline("Enter your credit score = ");

if($a >= 50000 && $b >= 750){
  echo "Your Loan is Approved";
}else if($a >= 50000 && $b == 700 || $b <= 749){
  echo "Your Application Requires a review";
}else{
  echo "Your Application is Rejected";
}

//Control Statement

//4. Generate a multiplication table for a user-entered number 
//from 1 through 12 using a loop.
// Display the result in a structured format.

$a = (int)readline("Enter the table number = ");
for($i = 1; $i <= 12; $i++ ){
  echo $a ." X " .$i ." = " .($a*$i) .PHP_EOL;
}

//5. Accept a user-entered number and repeatedly reduce it by 
//the sum of its digits until a single-digit value remains. 
//Display the value obtained after each iteration and the final
// single-digit result.

$n = (int)readline("Enter the number = ");
$i = 1;
while($n>=10){
  $sum=0;
  $temp=$n;

  while($temp>0){
    $digit=$temp%10;
    $sum=$sum+$digit;
    $temp=(int)($temp/10);
  }

  $n=$sum;
  echo "After the iteration $i = $n\n";
  $i++;
}

echo "Final digit is = $n\n";

//6. Accept a positive integer from the user and generate all numbers from 1 up to that integer whose,
// sum of digits is greater than 10. 
//Display the numbers and the total count of such numbers.

$n=(int)readline("Enter a positive number : ");
$count = 0;
for($i = 1; $i<=$n; $i++){
  $sum = 0;
  $temp=$i;

  while($temp > 0){
    $digit = $temp % 10;
    $sum+=$digit;
    $temp=(int)($temp/10);
  }

  if($sum > 10){
    echo $i ." ";
    $count++;
  }
}

echo "\nTotal count = " .$count;

?>
