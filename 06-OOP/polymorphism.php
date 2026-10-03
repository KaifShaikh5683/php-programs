<?php
// class Animal{
//     public function sound(){
//         echo "Animal makes a sound"."\n";
//     }
// }
// class Dog extends Animal{
//     public function sound(){
//         echo "Dog is barking"."\n";
//     }
// }
// class Cat extends Animal{
//     public function sound(){
//         echo "Cat says Meow !!"."\n";
//     }
// }

//  function makeSound(Animal $animal){
//     $animal->sound();
// }

//  $animal=new Animal();
// // $animal->sound();

// $dog=new Dog();
// $dog->sound();

// $cat=new Cat();
// $cat->sound();

// makeSound($animal);
// makeSound($dog);
// makeSound($cat);

//Scenario:
// You are building a minimalist backend processing engine for a shopping cart. The 
// system handles standard products and digital downloadable products. Every product 
// needs its sensitive structural data secured from direct external tampering, must 
// reuse core pricing logic, and must generate customized checkout descriptions seamlessly.

// Requirements:
// 1. Encapsulation: Create a base class named 'Product'.
//    - Protect the internal properties '$title' (string) and '$basePrice' (float/int) 
//      so they cannot be directly reassigned from outside the class instance.
//    - Implement a constructor to initialize these values.
//    - Expose public getter methods to fetch the title and base price securely. 
//    - Add a validation setter rule for '$basePrice': it must throw an Exception 
//      if someone tries to update the price to a negative value.
// 2. Inheritance: Create a child class named 'DigitalProduct' that extends 'Product'.
//    - It needs an exclusive property for '$downloadLimit' (integer).
//    - Implement its own constructor that correctly handles passing the title and 
//      base price up to the parent constructor while mapping its unique download limit.
// 3. Basic Polymorphism: Both classes must expose a method named 'getBillDetails()'.
//    - For a standard 'Product', it returns: "Product: [Title] - Cost: $[Base Price]"
//    - For a 'DigitalProduct', override the method so it returns: 
//      "Digital: [Title] - Cost: $[Base Price] (Downloads remaining: [Download Limit])"

class Product{
    protected string $title;
    protected float $basePrice;

    public function __construct($title,$basePrice)
    {
        $this->title=$title;
        $this->basePrice=$basePrice;
    }

    public function gettitle(){
        return $this->title;
    }

    public function getbasePrice(){
        return $this->basePrice;
    }

    public function settitle($title){
        $this->title=$title;
    }

    public function setbasePrice($basePrice){
        $this->basePrice=$basePrice;
        if($this->basePrice<0){
            echo "The base price cannot be nagative"."\n";
        }
    }

    public function getBillDetails()
    {
        return "Product: " . $this->title .
               " - Cost: " . $this->basePrice;
    }
}

class DigitalProduct extends Product{
    private int $downloadLimit;
    public function __construct($title,$basePrice,$downloadLimit)
    {
        parent::__construct($title,$basePrice);
        $this->downloadLimit=$downloadLimit;
    }
    


public function getBillDetails()
    {
        return "Digital: " . $this->title .
               " - Cost: " . $this->basePrice .
               " (Downloads remaining: " . $this->downloadLimit . ")";
    }
}

$product=new Product("Laptop",50,000);

$digital=new DigitalProduct("The Atomic Habits",750.54,500);

echo $product->getBillDetails();

echo "\n";

echo $digital->getBillDetails();
?>