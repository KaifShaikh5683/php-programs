<?php
class User{
  public $name;
  public $email;
  public $password;
  public $role;

//Default Constructor
//   public function __construct(){
//     echo "Login Details of Employee" ."\n";
//   }
 //parameterized constructor
  public function __construct(string $name,string $email,string $password,string $role){
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
    $this->role=$role;
  } 

}
$user1=new User(
  "Kaif Shaikh",
  "kaifshaikh04885@gmail.com",
  "5683968",
  "PHP Developer");

print_r($user1);

$user2=new User(
  "John",
  "john@gmail.com",
  "123468",
  "Database Engineering");

print_r($user2);


?>