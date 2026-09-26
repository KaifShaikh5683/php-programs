<?php
// ## Problem 1: The E-Commerce Product (Basic)
// Goal: Create a class that models a store product and automatically calculates its final price including tax.
// Requirements:

// • Create a class named Product.
// • Add three properties: $name (string), $price (float), and $taxRate (float, e.g., 0.15 for 15%).
// • Create a __construct method that accepts and initializes all three properties.
// • Create a method named getFinalPrice() that returns the total price (price + (price * taxRate)).
// • Test it: Instantiate two different products (e.g., a "Laptop" and a "Book") with different prices and tax rates, and print out their final prices.

class Product{
    public $name;
    public $price;
    public $taxRate;

    public function __construct(string $name,float $price,float $taxRate){
        $this->name=$name;
        $this->price=$price;
        $this->taxRate=$taxRate;
    }

    public function  getFinalPrice(string $name,float $price,float $taxRate){
        echo "Final Price = ".$price+($price * $taxRate)."\n";
    }
}
$user=new Product("Dell Inspiron",45000,18);
$user->getFinalPrice("Dell Inspiron",45000,18); 

$user1=new Product("Atomic Habits",750,18);
$user1->getFinalPrice("Atomic Habits",750,18);

// ## Problem 2: Bank Account Manager (Intermediate)
// Goal: Implement a simple banking system that handles deposits, withdrawals, and balance tracking using object-oriented principles.
// Requirements:

// • Create a class named BankAccount.
// • Add three properties: $accountHolder (string), $accountNumber (string), and $balance (float).
// • The __construct method should accept the holder's name and account number. Set the initial $balance to 0.0.
// • Create a method named deposit($amount) that adds the amount to the balance and prints the new balance.
// • Create a method named withdraw($amount) that checks if the account has enough money. If yes, deduct the amount. If not, print an "Insufficient funds" warning.
// • Create a method named getBalance() to print the current statement.
// • Test it: Create an account, deposit $500, try to withdraw $600 (should fail), and then successfully withdraw $200.

class BankAccount{
 public  $accountHolder;
    public $accountNumber;
    public $balance;

    public function __construct(string $accountHolder,string $accountNumber)
    {
        $this->accountHolder=$accountHolder;
        $this->accountNumber=$accountNumber;
        $this->balance=0.0;
    }

    public function deposit(float $amount){
        echo "Deposit Amount = ".$this->balance=$amount+$this->balance."\n";
    }

    public function withdraw(float $amount){
        
        if($amount<=$this->balance){
            $this->balance=$this->balance-$amount;
            echo "deduct the amount"."\n";
            echo "Withdraw = ".$amount."\n";
            echo "Remaining Amount = ".$this->balance."\n";
        }else{
            echo "Insufficient funds"."\n";
        }
    }

    public function getBalance(){
        echo "Current Balance = ".$this->balance."\n";
    }
}
$holder=new BankAccount("Kaif Shaikh","123456789");
$holder->deposit(20000);
$holder->withdraw(15000);
$holder->getBalance();

// ## Problem 3: Student Grading System (Intermediate)
// Goal: Manage student data and dynamically calculate grades based on an array of scores passed through a constructor.
// Requirements:

// • Create a class named Student.
// • Add three properties: $studentName (string), $subject (string), and $scores (array of integers).
// • The __construct method should initialize all three properties when the object is created.
// • Create a method named calculateAverage() that computes and returns the average of the scores array.
// • Create a method named getGrade() that calls calculateAverage() and returns a letter grade:
// • 'A' for an average of 90 or above.
//    * 'B' for 80 to 89.
//    * 'C' for 70 to 79.
//    * 'F' for anything below 70.
// • Test it: Create a student named "Alex" for the subject "Math" with the scores [85, 92, 78, 90]. Print out their name, average score, and final letter grade.

class Student
{
    public string $studentName;
    public array $subject;
    public array $scores;

    public function __construct($studentName, $subject, $scores)
    {
        $this->studentName = $studentName;
        $this->subject = $subject;
        $this->scores = $scores;
    }

    public function calculateAverage()
    {
        $sum = 0;

        for ($i = 0; $i < count($this->scores); $i++) {
            $sum = $sum + $this->scores[$i];
        }

        return $sum / count($this->scores);
    }

    public function getGrade()
    {
        $average = $this->calculateAverage();

        if ($average >= 90) {
            return "A";
        } elseif ($average >= 80) {
            return "B";
        } elseif ($average >= 70) {
            return "C";
        } else {
            return "F";
        }
    }

    public function getsubdisplay()
    {
        for ($i = 0; $i < count($this->subject); $i++) {
            echo $this->subject[$i] . " : " . $this->scores[$i] . "\n";
        }
    }
}

$student = new Student(
    "Alex",
    ["Maths", "English", "Science", "History"],
    [85, 92, 78, 90]
);

echo "Student Name: " . $student->studentName . "\n";

echo "\nSubjects and Marks:\n";
$student->getsubdisplay();

echo "\nAverage: " . $student->calculateAverage() . "\n";

echo "Grade: " . $student->getGrade() . "\n";





?>