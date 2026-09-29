<?php
// Inheritance :-
// Inheritance is an Object-Oriented Programming (OOP) concept where one class can inherit properties and methods from another class.
// Single Level Inherutance :- 
// Single-level inheritance is a type of inheritance where one child class inherits directly from one parent class.
// class Android{
//     public $name;
//     public $processor;
//     public $RAM;
//     public $price;

//     public function OS(){
//         echo $this->name ." has Android as a Operating System "."\n";
//     }
// }class Android_phones extends Android{
//     public function Samsung(){
//         echo "Model Name : ".$this->name."\n";
//         echo "Processor : ".$this->processor."\n";
//         echo "RAM : ".$this->RAM."\n";
//         echo "Price : ".$this->price."\n";
//     }

//     public function Google(){
//         echo "Model Name : ".$this->name."\n";
//         echo "Processor : ".$this->processor."\n";
//         echo "RAM : ".$this->RAM."\n";
//         echo "Price : ".$this->price."\n";
//     }

//     public function Nothing(){
//         echo "Model Name : ".$this->name."\n";
//         echo "Processor : ".$this->processor."\n";
//         echo "RAM : ".$this->RAM."\n";
//         echo "Price : ".$this->price."/n";
//     }
// }
// $samsung=new Android_phones();

// $samsung->name="SamsungA14";
// $samsung->processor="Exsonus";
// $samsung->RAM="6GB";
// $samsung->price="17,000";

// $samsung->OS();
// $samsung->Samsung();

// echo "\n";

// $google=new Android_phones();

// $google->name="Google Pixel 11";
// $google->processor="Google Tensor G6";
// $google->RAM="12GB";
// $google->price="1,50,000";

// $google->OS();
// $google->Google();

// echo "\n";

// $nothing=new Android_phones();

// $nothing->name="Nothing 3";
// $nothing->processor="Qualcomm Snapdragon 8s Gen 4 ";
// $nothing->RAM="12GB";
// $nothing->price="79,999";

// $nothing->OS();
// $nothing->Nothing();

// Multilevel Inheritance :-
//Multilevel inheritance is a type of inheritance where a class inherits from another child class, creating multiple levels of inheritance.

// class Amazon{
//     public function org(){
//     echo "Amazon is a Multi National Company"."\n";
//     }
// }

// class services extends Amazon{
//     public function services(){
//         echo "Amazon provides different types of services. "."\n";
//         echo " --- E-Commerce - Amazon Shopping"."\n";
//         echo " --- Cloud Computing - AWS"."\n";
//         echo " --- Entertainment - Amazon Prime Video, Amazon Music, Audible ,Twitch"."\n";
//         echo " --- Finanacial - Amazon Pay, Amazon Prime "."\n";
//     }
// }

// class AmazonShop extends services{
//     public $category;
//     public $item;
//     public $types;
//     public $color;
//     public $price;

//     public function buy(){
//         echo "=====Amazon Shopping====="."\n";
//         echo "Category = ".$this->category."\n";
//         echo "Item = ".$this->item."\n";
//         echo "Type = ".$this->types."\n";
//         echo "Color = ".$this->color."\n";
//         echo "Price = ".$this->price."\n";
//         }
// }
// $customer=new AmazonShop();

// $customer->category="Watch";
// $customer->item="CasioA57";
// $customer->types="Digital";
// $customer->color="Silver Metallic Color";
// $customer->price="2,750";

// $customer->org();
// echo "\n";
// $customer->services();
// echo "\n";
// $customer->buy();


//Hierarchical Inheritance :-
// class Watches{
//     public $type;
//     public $brand;
//     public $name;
//     public function watch(){
//         echo "Watches can be Categorised in to different types"."\n";
//     }
// }

// class Digital extends Watches{
    

//     public function digiwatch(){
//         echo "Type = ".$this->type."\n";
//         echo "Brand = ".$this->brand."\n";
//         echo "Model = ".$this->name."\n";
//     }
// }

// class Timex extends Digital{
//     public function timex(){
//         echo "It is one of the digital watches"."\n";
//     }
// }

// class Analog extends Watches{

// public function anawatches(){
//     echo "Type = ".$this->type."\n";
//     echo "Brand = ".$this->brand."\n";
//         echo "Model = ".$this->name."\n";
//     }
// }

// class Automatic extends Watches{
//     public function autowatches(){
//         echo "Type = ".$this->type."\n";
//         echo "Brand = ".$this->brand."\n";
//         echo "Model = ".$this->name."\n";
//     }
// }

// $user=new Digital();
// $user->type="Digital Watch";
// $user->brand="Casio";
// $user->name="Casio A57";
// $user->watch();
// $user->digiwatch();

// echo "\n";

// $user1=new Analog();
// $user1->type="Analog";
// $user1->brand="Titan";
// $user1->name="Titan Minimals Quartz";
// $user1->watch();
// $user1->anawatches();

// echo "\n";

// $user2=new Automatic();
// $user2->type="Automatic";
// $user2->brand="Rolex";
// $user2->name="Rolex Day-Date 40";
// $user2->watch();
// $user2->autowatches();

// echo "\n";

// $user3=new Timex();
// $user->type="Digital Watch";
// $user->brand="Timex";
// $user->name="Timex Digital";
// $user->watch();
// $user->digiwatch();
// $user3->timex();


// Accessing parent class constructor in child class 

// class Animal{
//     public $name;// class member variable
//     public function __construct($name){
//         $this->name=$name;
//     }
   
// }
// $dog=new Animal("Pomerian");
// // echo $dog->name;

// class Dog extends Animal{
//     public $breed;
//     public function __construct($name,$breed){
//         parent::__construct($name); //accessing parent class contructor
//         $this->breed=$breed;
//     }
// }
// $pug=new Dog("Dog "," Husky");
// echo $pug->name;
// echo $pug->breed;

class User{
    public $user;
    public function __construct($user){
        $this->user=$user;
    }
}

class Role extends User{
    public $role;
    public function __construct($user,$role){
        parent::__construct($user);
        $this->role=$role;
        echo $role." Initialized from the child class constructor"."\n";
    }
}

$user=new Role("Kaif Shaikh : ","Database Developer");
echo $user->user;
echo $user->role;
echo "\n";
$user1=new Role("Ayush Nate : ","Software Developer");
echo $user1->user;
echo $user1->role;
echo "\n";
$user2=new Role("Ankur Singh : ","AI Developer");
echo $user2->user;
echo $user2->role;
echo "\n";
$user3=new Role("Tanish Dalvi : ","Tester");
echo $user3->user;
echo $user3->role;
?>