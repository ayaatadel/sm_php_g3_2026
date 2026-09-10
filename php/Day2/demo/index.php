<?php
require './navbar.php';
// /**
//  * functions 
//  * Bulti in function : gettype , settype , is_int 
//  * User defined functions  :
//  * regular function 
//  * function expression 
//  * anonoumus (clusre function)
//  * arrow function 
//  * call back function 
//  * high order function 
//  * self invoked function
//  * 
//  * 
//  * ======== function funName()
//  * {
//  * body of function
//  * }
//  * call()==> funName()
//  * 
//  * 
//  * * ======== $variableName=function ()
//  * {
//  * body of function
//  * }
//  * call()==>$variableName()
//  * 
//  * 
//  * ============
//  * * * ======== $variableName=fv ()=>code;
//  * call()==>$variableName()
//  * 
//  * 
//  * --------------- variables------
//  * parameter ($x , $y)
//  * 
//  * global variable :  gblobal $var_name
//  * 
//  * 
//  * 
//  * 
//  */



// // function printData()
// // {
// //     echo "hello"; // void 
// // }
// // function sayHello($name)
// // {
// //     return "hello ". $name ."<br>";// return + parameters
// // }

// // print(sayHello("malak"));
// // echo(sayHello("mona"));


// // function expression

// // $result=function($name)
// // {
// //     echo "hello ".$name;

// // };


// // // $result("mahmoud")

// // // $userName="iti";
// // function printData()
// // {
// //     global $userName;
// //     echo $userName;

// // }

// // // printData();
// // $userName="iti";
// // $track ="php";
// // $result=function($name) use ($userName)
// // {

// // global $track;
// //     echo "hello ".$userName. " ".$track .$name;

// // };

// // $result("x");






// // // Arrow function 
// // $name="iti";
// // $x = fn($name) => print($name);

// // $x("mohammmed");



// /**
//  * 
//  * varaibles 
//  * 
//  * ---- parameter 
//  * function(p1,p2)
//  * {
//  * 
//  * }
//  * 
//  * --- global variable -----
//  * $x="php"
//  * 
//  * regular 
//  * funvtion test()
//  * {
//  *   global $x;
//  * }
//  * 
//  * ------- function expresssion ---
//  * $result=function() use($x){
//  * 
//  * global $x;
//  * }
//  * 
//  * ------------ Arrow function ---
//  * you can execute global viables with out using (global or use)
//  * 
//  */




// // $id=5;
// // $name="iti";
// // $track="php";

// // // Regular functionn

// // // function test($n,$w)
// // // {

// // // // echo $n+$w; // parameters
// // // global $id , $name , $track;

// // // // echo $id ."  :  ". $name . " : ".$track . "<br>";

// // // // }



// // // // test(12,14);


// // // //=========== function anonoums  =======



// // // $result=function () use ($id , $name , $track)
// // // {
// // //     // global $id , $name , $track;

// // // echo $id ."  :  ". $name . " : ".$track ."<br>";

// // // };
// // // $result();


// // // $id=5;
// // // $name="iti";
// // // $track="php";
// // // $x=90;
// // // $result=function () use ($id , $name , $track)
// // // {
// // //     // global $id , $name , $track;
// // //     // $x=55;  // block scope 

// // // echo $id ."  :  ". $name . " : ".$track ."<br>";

// // // };
// // // $result();


// // // echo $x; // xxxxxxxx error


// // /**
// //  * global scope  : use except function ==> define as global
// //  * 
// //  * 
// //  * block scope {} : use in block 
// //  */



// // // $result=fn()=>"hello";
// // // $result=fn($x)=>$x;  // return $x

// // // echo $result(12);


// // // call back function 

// // // function trackData($track )
// // // {
// // //     // return $track; // // return =======> array : print_r , var_dump
// // //  return $track["name"];  // string

// // //     } 


// // // // print_r(trackData(["name"=>"php","id"=>3]));
// // // echo(trackData(["name"=>"php","id"=>3]));


// // // function trackData($track , $func)
// // // {
// // //     // $func();
// // //     // return $track; // // return =======> array : print_r , var_dump
// // //  // string


// // // printData();
// // //     } 

// // //     trackData(5,function(){

// // //         echo "hello";
// // //     });


// // //     function printData()
// // //     {
// // //         echo "track back End";
// // //     }



// // //----------- self invoked function || immediatly invoked function

// // $track ="php";

// // // (fn()=>  print("hello"))(); // xxxxxxxxxxxxxx
// // // echo (fn() => "hello")();
// // echo (fn() => $track)();





// // (function () use($track){
// //     // return "hello";
// //     global $track;
// //     echo $track;

// // })();


// // $test="test";

// // $result=fn()=>$test;
// // echo $result();



// //========== variable of variable ====

// // $name="track";

// // $$name="php"; // $track="php
// // // $track="php";
// // echo  $track;


// // $x="y";
// // $$x=25; // $y=25
// // echo $y;


// // =============  By Value & By Refrence

// // $x = 5;
// // $y = $x;  //by value 
// // $y = 10;
// // echo $x, $y;


// // // call by refrence 

// // $x = 5;
// // $y = &$x; // & : refrence
// // $y = 10;
// // echo $x, $y;


// // // 
// // // $arr = [1, 2, 3];
// // // // $arr2 = [...$arr];  ============= 
// // // array_push($arr2, 12);
// // var_dump($arr);
// // echo "<br> ***************** <br>";
// // var_dump($arr2);



// ///=========================
// /**
//  * indexed array  ===> index 
//  * associative array   ==>
//  * 
//  * =========
//  * one dimnession array  []
//  * multi dimenssion array  [[][]]
//  * 
//  * 
//  * 
//  */


// // $a=[1,2,3,5];

// $user = ["name" => "mohammed", "age" => 27];


// // address => cairo
// // echo $user["age"];
// // $user["address"]="cairo";  // add new value
// // $user["name"]="mahmoud";

// // unset($user["age"]);

// // print_r($user);

// // get length ==. count 
// // array_push , array_unshift , array_pop , array_shift

// // $ar=[1,2,3,4];
// // unset($ar[2]);
// // print_r($ar);


// // isset  ==> has value or not , empty ==> value empty ==> ""  ,[]
// // $x=8;
// // $x=[];
// // var_dump((empty($x)));

// //============= string =========

// // $text="    Hello In Iti     ";
// // echo $text;
// // echo trim($text) ,"<br>";
// // echo strtoupper($text) ,"<br>";
// // echo strtolower($text) ,"<br>";
// //  var_dump(str_contains($text," Iti"));
// //  echo "<br>";

// //  var_dump(str_word_count($text));
// //  echo "<br>";
// //  var_dump(str_repeat($text,3));
// //  echo "<br>";
// //  var_dump(strrev($text));
// //  echo "<br>";
// //  $newText=trim($text);
// //  var_dump(str_starts_with($newText,"Hello"));
// //  var_dump(str_ends_with($newText,"Iti"));
// //  echo "<br>";



// ///////////////====== convert from array to string ==========
// // $arr=["iti","php"];
// // $text=implode("  ",$arr)  ;// convert from array to string
// // $text=implode(" ',' ",$arr)  ;// convert from array to string
// // // // 'iti','php'
// // $text="'".$text."'";

// // //   select data from form ==> store in data base
// // // [

// // // "iti" , "php"
// // // ]


// // // 
// // // insert into users('iti','php')
// // // 
// // // 'iti','php'
// // echo $text;


//============= convert from string to array ===

// $text = "hello iti track php ";

// $arr = explode(" ",$text); //["hello" ,"iti", "track", "php"]

// print_r($arr); 


// =========== Super global variables ======
/**
 * $_GET  : get data from form
 * $_POET  : send data , get data
 * $_SESSION  : session
 * $_COOKIES   : cookies
 * $_SEVER   : server
 */

// var_dump($_SERVER);  // information about server