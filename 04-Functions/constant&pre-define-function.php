<?php
// Syntax to define an constant
// define(constName, constValue)
// const constName = constValue;
// constName must be in UpperCase.

define("MAX_ATTEMPT_ALLOWED",3);
define("APP_NAME", "Instagram");

// echo MAX_ATTEMPT_ALLOWED ."\n";

//const
const APP_VERSION = "V.0.2.4";
//pre_define_function for Strings :-
// $name = "kaif shaikh";
// echo $name[2] ."\n";   //Gives the letter according to the index number
// echo strlen($name) ."\n"; //Gives the length no. of the string.
// echo str_word_count($name) ."\n"; //Give the no. of words count.
// echo strtoupper($name) ."\n"; //Gives the string in UPPERCASE.
// echo strtolower($name) ."\n"; //Gives the string in lowercase.
// echo ucfirst($name) ."\n"; //Gives the str 1st word in Uppercase.
// echo ucwords($name) ."\n"; //Makes the str all the words 1st letter in Uppercase.

// $para = "           Welcome back        ";
// echo trim($para); trims all the spaces.
// ltrim($para); // trime the left side.
// rtrim($para); //trime the right side.

//search functions:
$name = "laravel is easy";
//echo strpos($name,"is") ."\n"; // Gives the index number of the mentioned str.
// echo str_contains($name,"easy"); //Gives the ans in true-1 or false-0 ,according to the mention str.
// echo substr($name, 2, 7) ."\n"; //Gives only the str according to the starting and ending index no. .
// echo str_replace("laravel", "PHP", $name) ."\n";// To change the old value to new value.
// echo strrev("Kaif") ."\n"; //Gives the mention str in to reverse order. 

//comparing two strings

$a= "Hello";
$b="hello";

// echo strcmp($b,$a) ."\n"; //compare using unicodes give the o/p in unicode(0, pos+, neg-).
// echo strcasecmp($a,$b) ."\n"; //ignores the cases

$text = "Laravel,PHP,SQL";
$result = explode(",",$text); //array
print_r($result);

$list = ["Kaif", "Soham", "Sahud", "Ayush", "Efam"];
$res = implode(" ",$list);
echo $res;

//str into array of char
$out = str_split($text);
print_r($out) ."\n";

//iterate string

//WAP to find the number of vowels present in the string
//Vowels = a, e, i, o ,u;
$text = "Php is easy";
$count_vowel = 0;
for($i=0;$i<strlen($text);$i++){
  if($text[$i]=='a' || $text[$i]=='e' || 
     $text[$i]=='i' || $text[$i]=='o' || 
     $text[$i]=='u'){
    
    $count_vowel++;
  }
}
echo $count_vowel;

//Vowels = a, e, i, o ,u;
$text = "<?php?> is easy";
$count_consonents = 0;
$count_vowels=0;
for($i=0;$i<strlen($text);$i++){
  if($text[$i]!='a' && $text[$i]!='e' && 
     $text[$i]!='i' && $text[$i]!='o' && 
     $text[$i]!='u'){
    
    $count_consonents++;
    
     } elseif($text[$i]=='a' || $text[$i]=='e' || 
     $text[$i]=='i' || $text[$i]=='o' || 
     $text[$i]=='u'){
    
    $count_vowels++;
  }
}
echo "Total No. of Consonent = " .$count_consonents ."\n";
echo "Total No. of Vowel = " .$count_vowels ."\n";

//Palindrome
//use trim and lowercase
  $name=(string)readline("Enter your name : ");
  $rev=strrev($name);
  trim($name);
  strtolower($name);
  if($name==$rev){
  echo "It's an Palindrome";
  }else{
  echo "Its not an palindrome";
  }
?>