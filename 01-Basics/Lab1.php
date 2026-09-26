<?php
// 1. Create a PHP program that stores a student's name, age, course, percentage, and city in variables and displays all the details in a formatted output.

$name = "Kaif";
$age= 22;
$course = "Web developement with PHP";
$percentage = 80;
$city = "Palghar";

echo "Name : $name\n";
echo "Age : $age\n";
echo "Course : $course\n";
echo "Percentage : $percentage\n";
echo "City : $city\n";

// 2. Create a PHP program that accepts a product name, quantity, and price from the user and calculates and displays the total purchase amount.

$p = (string)readline("Enter Product Name : ");
$q = (int)readline("Enter the quantity : ");
$pr=(float)readline("Enter the price of the product : ");
$t_p=$q * $pr;
echo "Total Purchase Amount : $t_p\n";

//3. Create a PHP program that accepts a person's name, age, height, and whether the person is a student from the user, then displays each value along with its data type.

$n = (string)readline("Enter Your Name : ");
$a = (int)readline("Enter your Age : ");
$h = (float)readline("Enter your Height : ");
$s = (bool)readline("Are you a Student ? (1 for Yes, 0 for No) : ");
echo "Name : " .$n ." Datatype = " .gettype($n) ."\n";
echo "Age : " .$a ." Datatype = " .gettype($a) ."\n";
echo "Height : " .$h ." Datatype = " .gettype($h) ."\n";
echo "Student : " .($s ? "Yes" : "No") ." Datatype : " .gettype($s) ."\n";

//4. Create a PHP program that accepts the principal amount, rate of interest, and time from the user and calculates and displays the simple interest and final amount.

$p_a = (int)readline("Enter your Principal Amount : ");
$r_o_i = (int)readline("Enter your Rate of Interest : ");
$t_d = (int)readline("Enter your Time Duration : ");
$s_i = $p_a * $r_o_i *$t_d / 100;
$f_a = $p_a + $s_i;

echo "Simple Interest is : " .$s_i ."\n";
echo "Final Amount : " .$f_a ."\n";

//5. Create a PHP program that accepts the user's first name, last name, age, and city, then displays a complete introduction using the entered values.
$f_n=(string)readline("Enter Your First Name : ");
$l_n=(string)readline("Enter Your Last Name : ");
$a=(int)readline("Enter your Age : ");
$c=(string)readline("Enter your City Name : ");
echo "My Name is " .$f_n ." " .$l_n ." I am " .$a ." years old and I live in " .$c .".";
?>