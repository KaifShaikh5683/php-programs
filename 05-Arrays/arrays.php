<?php
//Arrays: large container to store values.
// To print array always use "print_r" .
$names = ["A","B","C","D","E","F","G","H"];

$numbers =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$phones = ["Apple", "Samsung", "Vivo", "Oppo", "Google Pixel"];

print_r($names);

//Accessing elements of specific index
echo $names[1]; //B
//echo $names[9]; // out of bound

//to change the element
$names[0]="K";
print_r($names);

$rollNo=[1001,1002,1003,1004,1005];
//to add new element in existing array
$rollNo[] = 1008;
//function or method to push value in array
array_push($rollNo , 1009,1010,1011);
print_r($rollNo);

//remove an last element from the array
array_pop($rollNo);
print_r($rollNo);

//remove first element of the array
array_shift($rollNo);
print_r($rollNo);

// to remove specific element
unset($rollNo[1]);
print_r($rollNo);

// To check the size of array
echo count($rollNo) ."\n";

//iterating an array using : while, do-while, for , foreach .

//while loop

//$i=0;
// while($i<count($phones)){
//     echo $phones[$i] ."\n";
//     $i++;
// }

//do-while loop

// do{
//   echo $phones[$i] ."\n";
//   $i++;
// }while($i<count($phones));

//for loop

// for($i=0;$i<count($phones);$i++) {

//     echo $phones[$i] ."\n";
// }

// foreach($phones as $element){
//     echo $element ."\n";
// }

//indexed array
$age=[
    0=> 21,
    1=> 22
];

//associative array
$details = [
    "name" => "Kaif",
    "age" => 22
];

echo $details["name"];
array_push($details,"city" ,"Palghar");

unset($details[1]);
print_r($details);

unset($details[0]);
print_r($details);

$details["city"]="Palghar";
print_r($details);

// Only to print values
foreach($details as $value){
    echo $value ."\n";
}

//To print key and values
foreach($details as $key => $value){
    echo $key ." : " .$value ."\n";
}

?>