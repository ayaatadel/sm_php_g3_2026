<?php

/**
 * 
 * procedural paradigm     ==> native 
 * oop paradigm > object , class
 * 
 * class : strucure , template    ====> proberities , methods
 * object : instance of class
 * 
 * =================== ACCESS Modefires 
 * public  :  any class 
 * protected  : class + inhertence classes 
 * private  : only of class
 * 
 * ============= constructor ===============
 *  only one constructor
 * ---> __conctruct : function call while creating object
 * 
 * =============== Princebles in OOP ===========
 * 
 * ========= Encapsulation ===============
 *
 * Encapsulation : protect data
 * 
 * ======== Inheritance ============
 * Permited  : Single Inheritance , Hierearcial Inheritance , MultiLevel Inheritance
 * Not Permited : Hybried Inheritance , Multible Inheritance
 * 
 * =========== polymorphism ==========
 * 
 * override (accepted in php ) : same function name , same function parameters (count , data type) , different in return
 * overloading  (not accepted in php): same function name ,different function parameters (count , data type) , different in return  
 * 
 * ================= Abstraction ==============
 * 
 * class can't take object from it 
 * class template of data and function to make another classes can extend it
 * 
 * function : 
 * -- function normal  : if i need to make override i will do it
 * -- abstract function  : must make implemenation of this function in inheritance class
 *    --- class has abstract function  ===> inherit class must write implemetation of this function
 * 
 * 
 * ====================== Static =========
 * -- variable : class + value changable 
 * --  function : staic ==> class by Class Name
 *    deal with only class variables : static , const 
 * 
 * 
 * ======= Function Normal ===
 * deal with all types of variables (class or not)
 * 
 * ========================== Interviews Questions ========
 * 1- How to prevent take object from class : * abstract Class  Or Constructor be Private
 * 2- How to prevent take extend class : make class final class
 * 3- How to prevent override function : make function static
 * 
 * 
 */

 class Human
{


    public $name;
    private $email;
    protected $address;
    public static $count;
    const PI=3.14;


     function __construct($name = "userName", $email = "userEmail", $address = "userAddress")
    {
   // --- object ---
        /**
         * this : refrence refer on object
         */
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        Human::$count++;
    }


    function setEmail($email)
    {
        $this->email = $email;
    }


    function getEmail()
    {
        return $this->email;
    }
    function setAddress($address)
    {
        $this->address = $address;
    }


    function getAddress()
    {
        return $this->address;
    }

    static function printCount()
    {
         // const 
         // static 
         echo "PI : ".Human::PI ,"<br>  Count : ",Human::$count ,"<br>";
         
    }

  function printData()
    {
         echo "PI : ".Human::PI ,"<br>  Count : ",Human::$count ,"<br>";
        echo  " name: ", $this->name, "<br>", "email : ", $this->email, "<br>", "address : ", $this->address, "<br>";
        // echo  " name: ", $this->name ,"<br>", "email : ",$this->getEmail(),"<br>","address :",$this->getAddress(),"<br>";
    }
}

// 
// $h = new Human("iti", "iti@gmail.com", "cairo");
// $h2 = new Human("iti", "iti@gmail.com", "cairo");
// $h3 = new Human("iti", "iti@gmail.com", "cairo");

echo "<br>  Count : ",Human::$count ,"<br>";
Human::printCount();

// $h->email="hi";  //xxxxxxxxxx == error === email private properity

// $h->setEmail("ItiMenoufia@gmail.com");
// echo $h->getEmail();
// var_dump($h);
// $h->printHumanData();

class Person extends Human
{
    public $phone;
    public $id;


    function __construct($name, $email = "userEmail", $address = "userAddress", $phone = "userPhone", $id = "User Id")
    {
        parent::__construct($name, $email, $address);
        $this->phone = $phone;
        $this->id = $id;
    }

    function printData()
    {
        parent::printData();
        echo  "id : ", $this->id, "<br>", "phone : ", $this->phone;
        // echo  " name: ", $this->name ,"<br>", "email : ",$this->getEmail(),"<br>","address :",$this->getAddress(),"<br>";
    }

}

/**
 * 
 * parameters : 
 * 
 * take default values
 * doesn't take default vakues 
 */

// $p=new Person(name:"mahmoud@gmail.com",address:"cairo",phone:"01245678952");
// $p = new Person("hossam", id: 1);
// // var_dump($p);


// $p->printData();
// class Employee extends Person {}


// $e = new Employee("employeeName");

// var_dump($e);
//============================================= Abstraction 
// ---------------------- Ex 1
// abstract class Animal {

// abstract function sound(); // abstrct function 
// function print()
// {
//     echo "hello";
// }

// }


// class Cat extends Animal {
//      function sound(){
//         echo "cat sound";
//      }
//      function print()
// {
//     echo "cat";
// }

// }

//---------------------- Ex2

abstract class Bank
{

    protected $balance;

    function __construct($b)
    {
        $this->balance = $b;
    }

    // function setBalance($balance)
    // {
    //     $this->balance=$balance;
    // }

    // function withdraw($depositeMony){
    //     if($depositeMony  <= $this->balance)
    //         {
    //                $this->balance=$this->balance-$depositeMony;
    //         }

    // }


    abstract function deposite($inputMony): float; // return vaou foat
    abstract function print(): void;
    abstract function withdraw($depositeMony): float;
}

class CairoBank extends Bank
{
    function __construct($b)
    {
        parent::__construct($b);
    }

    function deposite($inputMony): float
    {
        $this->balance = $this->balance + $inputMony;
        return $this->balance;
    }
    function  withdraw($depositeMony): float
    {
        if ($depositeMony  <= $this->balance) {
            $this->balance = $this->balance - $depositeMony;
        }
        return  $this->balance;
    }

    function print(): void
    {
        echo "Welcome in Cairo Banak";
    }
}


$c = new CairoBank(20000);
echo $c->withdraw(2000);
echo $c->deposite(5000);
