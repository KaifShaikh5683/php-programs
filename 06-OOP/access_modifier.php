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

class UserProfile{
    public $username;
    private $pinCode;

    public function __construct($username,$pinCode)
    {
       $this->username=$username;
       $this->pinCode=$pinCode;
    }

    public function updatePin($oldPin,$newPin){
        if($oldPin==$this->pinCode){
            $this->pinCode=$newPin;
            echo "Pin Updated Successfully"."\n";
        }else{

            echo "Access Denied:Wrong old PIN!"."\n";
        }

    }

    public function showProfile(){
            echo $this->username."\n";
            echo $this->pinCode."\n";
        }
}

$user=new UserProfile("Ayush","1234");

//$user->pinCode=9999;

$user->updatePin("2589","5683");

$user->updatePin("1234","5683");

echo $user->showProfile();


?>