<?php
// Q1: Electricity Bill Calculator

$unit = 150;

if($unit <=100){
    $bill = $unit * 5;
}elseif($unit >= 101 && $unit <=200 ){
    $bill = $unit * 7;
}elseif($unit > 200){
    $bill = $unit * 10;
}

echo "The total bill is : " .$bill;

//Q2: Login Authentication Checker
$username = "admin";
$password = "1234";

if($username == ""){
    echo "Username Required";
}elseif($password==""){
    echo "Password required";
}elseif($username=="admin" && $password=="1234"){
    echo "Login Successful";
}else{
    echo "Invalid Credentials";
}

// Q3: Triangle Type Finder
$side1 = 3;
$side2 = 4;
$side3 = 2;

if($side1==$side2 && $side2==$side3){
    echo "Equilateral triangle";
}elseif($side1==$side2 || $side2 == $side3 || $side1 == $side3){
    echo "Isosceles Triangle";
}elseif($side1 != $side2 && $side2 != $side3 && $side1 != $side3){
    echo "Scalene Triangle";
}

// Q4: Discount Coupon System

$bill = 1500;

if($bill < 1000){
    $discount= 0;
}elseif($bill > 1000 && $bill <= 4999){
    $discount = $bill - $bill * 0.10;
}elseif($bill >= 5000){
    $discount =$bill - $bill * 0.25;
}
echo "The bill after discount is : " .$discount;

// Speed Limit Radar

$speed = 85;

if($speed==60){
    echo "Safe driving";
}elseif($speed>=61 && $speed<=80){
    echo "Warning: Slow down!";
}elseif($speed>80){
    echo "Challan issued! Over-speeding fine applied";
}


?>
