<?php
// class Bank{
//     public $name;
//     private $accountNo;// restriction // encapsulation // getter and setter
//     protected $balance;

//     //getter:-to get the value of a private or protected field - method

//     public function getAccountNo(){
//         return $this->accountNo;
//     }

//     public function getBalance(){
//        return $this->balance;
//     }
//     //setter:-to set the value of a private or protected field -method

//     public function setAccountNo($accountNo){
//         $this->accountNo=$accountNo;
//     }

//     public function setBalance($balance){
//         $this->balance=$balance;
//     }

//     public function display(){
//        echo "Name : ".$this->name."\n";
//        echo "Account Number : ".$this->accountNo."\n";
//        echo "Balance : ". $this->balance."\n";

//     }

// }

// $kaif=New Bank();
// $kaif->name="Kaif Shaikh";
// $kaif->setAccountNo("123456789");
// $kaif->setBalance("2000");
// echo $kaif->display();

// // Access Modifier Example :
// class A{
//     public $a=1;
//     private $b=2;
//     protected $c=3;
// }

// class B extends A{
//     public function displayy(){
//        echo $this->a;
//         echo $this->b;
//         echo $this->c;
//     }
// }

// $obj=new B();
// $obj->displayy();


//## The Challenge: Profile Security Lock

// Write a short PHP script to manage a user profile. Your code must use one single class and show how private properties protect data while still being accessible inside the class.

// ## Structural Requirements

//    1. The Class: UserProfile
//    * Properties:
//       * public $username
//          * private $pinCode
//       * Constructor: Initialize both the $username and $pinCode when the profile is created.
//       * Methods:
//       * public function updatePin($oldPin, $newPin): Check if $oldPin matches the current private $pinCode. If it matches, update the $pinCode to $newPin and echo "PIN updated successfully!". If it does not match, echo "Access Denied: Wrong old PIN!".
//          * public function showProfile(): Echo the $username and the private $pinCode together.
      
// ## Execution Scenario to Test

// • Create a new UserProfile object (e.g., username: "Ayush", PIN: 1234).
// • Try to change $pinCode directly from outside the class (e.g., $user->pinCode = 9999;) to see PHP block it with an error.
// • Call updatePin() with the wrong old PIN to test the rejection.
// • Call updatePin() with the correct old PIN to successfully change it.
// • Call showProfile() to verify the new PIN is saved and displayed.

// class UserProfile{
//     public $username;
//     private $pinCode;

//     public function __construct($username,$pinCode)
//     {
//        $this->username=$username;
//        $this->pinCode=$pinCode;
//     }

//     public function updatePin($oldPin,$newPin){
//         if($oldPin==$this->pinCode){
//             $this->pinCode=$newPin;
//             echo "Pin Updated Successfully"."\n";
//         }else{

//             echo "Access Denied:Wrong old PIN!"."\n";
//         }

//     }

//     public function showProfile(){
//             echo $this->username."\n";
//             echo $this->pinCode."\n";
//         }
// }

// $user=new UserProfile("Ayush","1234");

// //$user->pinCode=9999;

// $user->updatePin("2589","5683");

// $user->updatePin("1234","5683");

// echo $user->showProfile();


//WAP for private and protected fileds and also take a private function

// class Emp{
//     private $sal;
//     protected $emp_details;

//     private function empsal($sal){
//         $this->sal=$sal;
//     }
// }
// class details extends Emp{
//     public function empdet($sal){
//         parent::empsal($sal);
//     }


// }
?>