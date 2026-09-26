<?php
$c= 1;
$table = 5;
while($c<=10){
    echo $table ."X" .$c ."=" .($table * $c) .PHP_EOL ;
    $c++;
}

// Lucky 7 search .

$a = 1;
while($a<=100){
    if($a%7==0){
    echo $a;
    $a++;
    break;
    }
    $a++;
    
}

// print even num.
$b=1;
while($b<=20){
    if($b%2!==0){
        $b++;
        continue;
    }
    echo $b;
    $b++;
}

//skip 5 backward

$c = 10;
while($c>=1){
    if($c==5){
        $c--;
        continue;
       
    }else{
        echo $c;
    }
    $c--;
}

?>