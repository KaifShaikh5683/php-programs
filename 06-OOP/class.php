<?php
// class :- design/template/blueprint which is use to create realworld objects.
class Student{
  public $name;
  public $age;
  public $gender;
  public $city;
  public $address;
  public $qualification;

  //behaviour/action
  public function study(){
    echo $this->name ." is Studying" ."\n";
  }

  public function speak(){
    echo "I am Speaking";
  }

  public function listen(){
    echo "I am Listening";
  }

  public function games(){
    echo "I am playing games";
  }

  public function commute (){
    echo "I am commuting";
  }

  public function sleep(){
    echo "I am Sleeping";
  }
}
// Objects :- real world entity.
$kaif = new Student();
$kaif -> name = "Kaif";
$kaif -> age = 22;
$kaif -> gender = "M";
$kaif -> address = "Palghar - Maharashtra";
$kaif -> qualification = "Graduate";
echo $kaif->age ."\n";
print_r($kaif);
$kaif->study();


class Registration {

    public $name;
    public $age;
    public $contact;
    public $email;
    public $password;

    public function registered() {
        echo "Name : " . $this->name . "\n";
        echo "Age : " . $this->age . "\n";
        echo "Contact : " . $this->contact . "\n";
        echo "E-mail : " . $this->email . "\n";
        echo "Password : " . $this->password . "\n";
    }
}

$register = new Registration();

$register->name = "Kaif Shaikh";
$register->age = 22;
$register->contact = 8999198621;
$register->email = "kaifshaikh04885@gmail.com";
$register->password = 123456789;

$register->registered();

class Student1 {

    public $name = "Dipesh";

    public function greet($name) {
        echo $this->name = $name . " Welcome";
    }
}

$kaif = new Student1();

$kaif->greet("Kaif");
$kaif->greet($kaif->name);

?>