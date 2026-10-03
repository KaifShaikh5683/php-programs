<?php
// // 1. Student Result Analyzer
// // Create a PHP program that accepts a student's name and marks for 5 subjects. Calculate the total, percentage, grade, and pass/fail status.

// class Student{
//     private $name;
//     private $marks=[];

//     public function __construct($name,$marks){
//     $this->name=$name;
//     $this->marks=$marks;
//     }

//     public function calculateTotal(){
//        return array_sum($this->marks);
//     }

//     public function calculatePercentage(){
//         return $this->calculateTotal()/5;
//     }
   
//     public function grades(){
//         $percentage=$this->calculatePercentage();
//         if($percentage>=80){
//             return "A\n";
//         }else if($percentage>=70){
//             return "B\n";
//         }elseif($percentage>=60){
//             return "C\n";
//         }elseif($percentage<=40){
//             return "D\n";
//         }else{
//             return "F\n";
//         }
//     }

//     public function status(){
//         foreach($this->marks as $marks){
//             if($marks<40){
//                 return "Fail\n";
//             }
//         }
//         return "Pass\n";
//     }

//     public function displayResult()
//     {
//         echo "----- Student Result -----\n";
//         echo "Name: " . $this->name . "\n";
//         echo "Total: " . $this->calculateTotal() . "/500\n";
//         echo "Percentage: " . $this->calculatePercentage() . "%\n";
//         echo "Grade: " . $this->grades() . "\n";
//         echo "Status: " . $this->status() . "\n";
//     }

// }

//     $name = readline("Enter Your Name : ");
//     $marks=[];
//     for($i=1;$i<=5;$i++){
//         $marks[]=readline("Enter % subject Marks : ");
//     }

// $student=new Student($name,$marks);
// $student->displayResult();

// // 2. Employee Salary Calculator
// // Create a function calculateSalary() that accepts basic salary, HRA percentage, DA percentage, and deduction percentage.
// //  Calculate and return the final salary. Take values from the user.

// class EmpSal{
//     private $basic_sal;
//     private $hra_percent;
//     private $da_percent;
//     private $de_percent;

//     public function __construct($basic_sal,$hra_percent,$da_percent,$de_percent){
//         $this->basic_sal=$basic_sal;
//         $this->hra_percent=$hra_percent;
//         $this->da_percent=$da_percent;
//         $this->de_percent=$de_percent;
//     }

//     public function calculateSalary(){
//          $Basic_Salary = $this->basic_sal;
//          $HRA_P = ($this->basic_sal * $this->hra_percent )/ 100;
//          $DA = ($this->basic_sal * $this->da_percent )/ 100;
//          $Gross_sal=$Basic_Salary + $HRA_P + $DA;
//          $DE = ($Gross_sal * $this->de_percent )/ 100;
//         return $final_sal = $Gross_sal - $DE;
//     }
// }

// $basic_sal=(float)readline("Enter your Basic Salary : ");
// $hra_percent=(float)readline("Enter HRA percentage : ");
// $da_percent=(float)readline("Enter DA percentage : ");
// $de_percent=(float)readline("Enter Dedunction percentage : ");

// $sal=new EmpSal($basic_sal,$hra_percent,$da_percent,$de_percent);

// echo "Final Salary : ".$sal->calculateSalary();

// // 3. Product Inventory
// // Create an associative array containing at least 6 products with their name, price, and quantity. 
// //Display all products, calculate total inventory value, and find the product with the highest price and lowest quantity.

// $product=[
//     "P1"=>["name"=>"Laptop",
//     "price"=>50000,
//     "quantity"=>5
//     ],

//     "P2"=>["name"=>"mobile",
//     "price"=>20000,
//     "quantity"=>10
//     ],

//     "P3"=>["name"=>"T.V",
//     "price"=>40000,
//     "quantity"=>3
//     ],

//     "P4"=>["name"=>"Chair",
//     "price"=>1500,
//     "quantity"=>20
//     ],

//     "P5"=>["name"=>"pencil",
//     "price"=>10,
//     "quantity"=>100
//     ],

//     "P6"=>["name"=>"Books",
//     "price"=>50,
//     "quantity"=>85
//     ]
// ];

// $total_invent_price=0;
// $highest_price=0;
// $highest_price_product="";

// $lowest_quantity=PHP_INT_MAX;
// $lowest_quan_pro="";

// foreach($product as $product){
//     echo "Product : ".$product["name"]."\n";
//     echo "Price : ".$product["price"]."\n";
//     echo "Quantity : ".$product["quantuty"]."\n";

//     $total_invent_price+=$product["price"]*$product["quantity"];

//     if($product["price"]>$highest_price){
//         $highest_price=$product["price"];
//         $highest_price_product=$product["name"];
//     }

//     if($product["quantity"]<$lowest_quantity){
//         $lowest_quantity=$product["quantity"];
//         $lowest_quan_pro=$product["name"];
//     }
// }

// echo "Total Inventory Value: ₹" . $total_invent_price . "\n";
// echo "Product with Highest Price: " . $highest_price_product . " (₹" . $highest_price . ")\n";
// echo "Product with Lowest Quantity: " . $lowest_quan_pro . " (" . $lowest_quantity . " units)\n";


// // 4. Word Frequency Analyzer
// // Take a sentence from the user. Convert it to lowercase, split it into words, count the frequency of each word,
// //  and display the most frequently occurring word.

// $sentence = (string)readline("Enter a sentence : ");
// $lowcase=strtolower($sentence);
// $word=explode(" ",$sentence);

// $frequency=[];

// foreach($word as $word){
//     if(isset($frequency[$word])){
//         $frequency[$word]++;
//     }else{
//         $frequency[$word]=1;
//     }
// }

// foreach($frequency as $word => $count){
//     echo $word." => ".$count."\n";
// }

// $maxCount = 0;
// $mostFrequentWord = "";

// foreach ($frequency as $word => $count) {

//     if ($count > $maxCount) {
//         $maxCount = $count;
//         $mostFrequentWord = $word;
//     }
// }

// echo "\nMost frequently occurring word: " . $mostFrequentWord;
// echo "\nFrequency: " . $maxCount;

// // 5. Bank Account Class
// // Create a BankAccount class with private accountNumber and balance properties.
// //  Create methods for deposit, withdrawal, and displaying balance.
// //   Prevent withdrawal when the balance is insufficient.

// class Bank{
//     private $name;
//     private $accountNumber;
//     private $balance;

//     public function __construct($name,$accountNumber,$balance)
//     {
//        $this->name=$name;
//        $this->accountNumber=$accountNumber;
//        $this->balance=$balance;
//     }

//     public function deposit($deposit){
//         echo "Deposit :".$deposit."\n";
//         echo "Total Balance : ".$this->balance=$deposit+$this->balance."\n";
//     }

//     public function withdraw($withdraw){
//         if($withdraw<$this->balance){
//             $this->balance=$this->balance-$withdraw;
//             echo "Withdraw Successful\n";
//             echo "Withdraw : ".$withdraw."\n";
//         }else{
//             echo "Withdraw : ".$withdraw."\n";
//             echo "Insufficient balance your total balance is ".$this->balance."\n";
//         }
//     }

//     public function balance(){
//         echo "Balance : ".$this->balance."\n";
//     }

// }
// $customer=new Bank("Kaif Shaikh",5683968,50000);
// $customer->deposit(5000);
// $customer->withdraw(60000);
// $customer->withdraw(50000);
// $customer->balance();


// 6. Employee Inheritance
// Create a parent Employee class with name, employee ID, and salary. Create Developer and Trainer child classes. 
//Add separate methods describing the work performed by each type of employee.

class Employee
{
    protected $name;
    protected $employeeId;
    protected $salary;

    public function __construct($name, $employeeId, $salary)
    {
        $this->name = $name;
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function displayDetails()
    {
        echo "Name: " . $this->name . "\n";
        echo "Employee ID: " . $this->employeeId . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}

class Developer extends Employee
{
    public function work()
    {
        echo $this->name . " works on developing and maintaining software applications.\n";
    }
}

class Trainer extends Employee
{
    public function work()
    {
        echo $this->name . " provides training and teaches technical concepts to employees.\n";
    }
}

$developer = new Developer("Kaif", 101, 30000);

$developer->displayDetails();
$developer->work();

echo "\n";

$trainer = new Trainer("Rahul", 102, 35000);

$trainer->displayDetails();
$trainer->work();

?>



?>