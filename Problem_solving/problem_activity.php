<?php
// Domain: Security / Form Validation
// ## Problem Statement
// Design a validation wrapper that inspects a queue of user registration inputs and stops processing the moment it encounters an invalid setup.
// Create a UserRegistration object containing properties like username, email, and age. Create a RegistrationValidator class with a method validateQueue(array $registrations): bool.

// The method must inspect the objects one by one.
// Rule 1: Username cannot be empty.
// Rule 2: Age must be 18 or older.

// If any registration fails these rules, the entire process must halt instantly, print the failure details, and return false.
// If all records are verified successfully, it returns true.


class UserRegistration{
    public $name;
    public $email;
    public $age;

    public function __construct($name,$email,$age){
        $this->name=$name;
        $this->email=$email;
        $this->age=$age;
    }

}

class RegistrationValidator{
    public function validateQueue(array $registrations): bool{
        foreach($registrations as $registration){
            if($registration->name==""){

            echo "Validation Error\n";
            echo "Username Cannot be Empty\n";
            echo "Email : ".$registration->email."\n";
            return false;

            }elseif($registration->age<18){
            echo "Validation Error\n";
            echo "Age must be greater 18\n";
            echo "Username : ".$registration->name."\n";
            return false;
        }else{

        echo "Records are Verified for ".$registration->name." \n";
        }
        }
        echo "All registrations verified successfully.\n";
        return true;
    }
}

$user1=new UserRegistration("Kaif Shaikh","kaifshaikh0488@gmail.com",22);
$user2=new UserRegistration("Ayush Nate","ayushnate@gmail.com",21);
$user3=new UserRegistration("Ankur Singh","aukursingh@gmail.com",17);
$user4=new UserRegistration("Tanish Dalvi","tanishdalvi@gmail.com",19);

$registrations = [$user1, $user2, $user3, $user4];
$validator = new RegistrationValidator();
$result = $validator->validateQueue($registrations);
echo "Result: " . ($result ? "true" : "false");





?>