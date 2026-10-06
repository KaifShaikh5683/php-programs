<?php
// // foundation for child class
// // abstract class , interface
// // abstract class : data members, functions , objects cannot be created of abstract class
// abstract class Vehicle{
//     public $name;
//     public function start(){
//         echo "The Vehicle starts with a key\n";
//     }

//     abstract public function stop(); // function declare
// }
// // concrete class 
// class Car extends Vehicle{
//     public function start(){
//         echo "The Car starts with a Key\n";
//     }

//     public function stop(){
//         echo "The Car Stop with braeks or hand break.\n";
//     }

// }

// class Bike extends Vehicle{
//     public function start(){
//         echo "The Bike starts with a Self Start\n";
//     }

//     public function stop(){
//         echo "The Bike Stop with rear breaks and front breaks.\n";
//     }

// }
// $car=new Car();
// $car->start();
// $car->stop();
// $car->name="Toyota Supra";

// echo "\n";

// $bike=new Bike();
// $bike->start();
// $bike->stop();
// $bike->name="Kawasaki Ninja H2";

// abstract class Employee{
//     public $name;
//     public $designation;
//     public $salary;


//     public function __construct($name,$designation,$salary){
//         $this->name=$name;
//         $this->designation=$designation;
//         $this->salary=$salary;
//     }

//      public function role(){
//         echo "What is the employee role in the organisation\n";
//     }

//     abstract public function experience();
// }

// class Developer extends Employee{

//     public function experience(){
//         echo "Name : ".$this->name."\n";
//         echo "Designation : ".$this->designation."\n";
//         echo "Salary : ".$this->salary."\n";
//         echo $this->name." has a 5 years of ".$this->designation." experience\n";
//     }
// }

// class Tester extends Employee{

//     public function experience(){
//         echo "Name : ".$this->name."\n";
//         echo "Designation : ".$this->designation."\n";
//         echo "Salary : ".$this->salary."\n";
//         echo $this->name." has a 3 years of ".$this->designation." experience\n";
//     }
// }

// class Tech_Support extends Employee{

//     public function experience(){
//         echo "Name : ".$this->name."\n";
//         echo "Designation : ".$this->designation."\n";
//         echo "Salary : ".$this->salary."\n";
//         echo $this->name." has a 5 years of ".$this->designation." experience\n";
//     }
// }

// $dev=new Developer("Kaif Shaikh","PHP Developer",50000);
// $dev->role();
// $dev->experience();
// echo "\n";
// $tester=new Tester("Ayush Nate","Automation Tester",55000);
// $tester->role();
// $tester->experience();
// echo "\n";
// $support=new Tech_Support("Ankur Singh","Tech Support Technician",65000);
// $support->role();
// $support->experience();


// WAP for Login Logout

// abstract class Account{

// public $username = "K_a_i_f_0";
// public $pass_word = 159753;
// public $name;
// public $password;

// abstract public function credentials();

// public function logout(){
//     echo "Click on logout button to Logged Out\n";
// }
// }
// class Login extends Account{
//     public function credentials(){

//     echo "Enter Username & Password to login \n";
//     echo "Username : ".$this->name."\n";
//     echo "Password : ".$this->password."\n";
//     if($this->name==$this->username && $this->password==$this->pass_word ){
//     echo "You'r username and password is correct\n";
//      echo $this->logout()."\n";
//     }else{
//     echo "You'r username or password  is inncorrect\n";
//     }

// }

// }
// $user=new Login();
// $user->name="K_a_i_f_0";
// $user->password=159753;
// $user->credentials();


// echo "\n";

// $user1=new Login();
// $user1->name="K_a_i_f_1";
// $user1->password=159753;
// $user1->credentials();

// abstract class Account1{
//     public $insta_username="Kaif Shaikh";
//     public $insta_password=12345678;
//     public $whatsapp_no=8999198621;
//     public $whatsapp_otp=159357;
//     public $name_input;
//     public $password_input;
//     public $no_input;
//     public $otp_input;

//     abstract public function credentials();

// public function logout(){
//     echo "Click on logout button to Logged Out\n";
// }
// }

// class Instagram extends Account1{

//     public function credentials(){

//     echo "Enter Username & Password to login to Instagram \n";

//     echo "Username : ".$this->name_input."\n";
//     echo "Password : ".$this->password_input."\n";

//     if($this->name_input==$this->insta_username && 
//     $this->password_input==$this->insta_password ){

//     echo "You'r username and password is correct\n";

//      $this->logout()."\n";

//     }else{

//     echo "You'r username or password  is inncorrect\n";

//     }
// }
// }
// class WhatsApp extends Account1{

//     public function credentials(){

//     echo "Enter Phone Number & OTP to login to WhatsApp \n";

//     echo "Phone Number : ".$this->no_input."\n";
//     echo "OTP : ".$this->otp_input."\n";

//     if($this->no_input==$this->whatsapp_no && 
//     $this->otp_input==$this->whatsapp_otp ){

//     echo "You'r Phone Number and OTP is correct\n";

//      $this->logout()."\n";

//     }else{

//     echo "You'r Number or OTP  is inncorrect\n";

//     }
// }
// }

// function LogINOUT(Account1 $user){
//     $user->credentials();
// }

// $insta_user=new Instagram();
// $insta_user->name_input="Kaif Shaikh";
// $insta_user->password_input=12345678;
// LogINOUT($insta_user);

// echo "\n";

// $app_user=new WhatsApp();
// $app_user->no_input=8999198621;
// $app_user->otp_input=159357;
// LogINOUT($app_user);

abstract class Apps{

public $input = [];

public function logout(){
    echo "Click on Logout button to Logout\n";
}
abstract public function credentials();
}

class Linkedin extends Apps {

    public $credentials = [
        "username" => "Tanishka",
        "password" => 12345
    ];

    public $input = [];

    public function credentials() {
        
        echo "Username: " . $this->input["username"] . "\n";
        echo "Password: " . $this->input["password"] . "\n";

    
        if($this->input == $this->credentials){
            echo "LinkedIn Login Successful\n";
            $this->logout();
        }else{
            "Invalid Username or Password\n";
            
    }
    
}
}

class WhatsApp extends Apps {

    public $credentials = [
        "phone" => 84214907919,
        "otp" => 150357
    ];

    public $input = [];

     public function credentials() {

        echo "WhatsApp Login\n";

        echo "Phone: " . $this->input["phone"] . "\n";
        echo "OTP: " . $this->input["otp"] . "\n";

        if($this->input == $this->credentials){
            echo "WhatsApp Login Successful\n";
            $this->logout();
         }else{
            echo "Invalid Phone Number or OTP\n";
            
         }
    }
}

function log_in_out(Apps $apps){
    $apps->credentials();
}

$linkedin = new Linkedin();

$linkedin->input["username"] = "Tanishka";
$linkedin->input["password"] = 12345;


$whatsapp = new WhatsApp();

$whatsapp->input["phone"] =  84214907919;
$whatsapp->input["otp"] = 150357;

log_in_out($linkedin);
echo "\n";
log_in_out($whatsapp);

?>