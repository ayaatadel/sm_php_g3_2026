<?php

/**
 * functions 
 * Bulti in function : gettype , settype , is_int 
 * User defined functions  :
 * regular function 
 * function expression 
 * anonoumus (clusre function)
 * arrow function 
 * call back function 
 * high order function 
 * self invoked function
 * 
 * 
 * ======== function funName()
 * {
 * body of function
 * }
 * call()==> funName()
 * 
 * 
 * * ======== $variableName=function ()
 * {
 * body of function
 * }
 * call()==>$variableName()
 * 
 * 
 * ============
 * * * ======== $variableName=fv ()=>code;
 * call()==>$variableName()
 * 
 * 
 * --------------- variables------
 * parameter ($x , $y)
 * 
 * global variable :  gblobal $var_name
 * 
 * 
 * 
 * 
 */



// function printData()
// {
//     echo "hello"; // void 
// }
// function sayHello($name)
// {
//     return "hello ". $name ."<br>";// return + parameters
// }

// print(sayHello("malak"));
// echo(sayHello("mona"));


// function expression

// $result=function($name)
// {
//     echo "hello ".$name;

// };


// // $result("mahmoud")

// // $userName="iti";
// function printData()
// {
//     global $userName;
//     echo $userName;

// }

// // printData();
// $userName="iti";
// $track ="php";
// $result=function($name) use ($userName)
// {

// global $track;
//     echo "hello ".$userName. " ".$track .$name;

// };

// $result("x");






// // Arrow function 
// $name="iti";
// $x = fn($name) => print($name);

// $x("mohammmed");



/**
 * 
 * varaibles 
 * 
 * ---- parameter 
 * function(p1,p2)
 * {
 * 
 * }
 * 
 * --- global variable -----
 * $x="php"
 * 
 * regular 
 * funvtion test()
 * {
 *   global $x;
 * }
 * 
 * ------- function expresssion ---
 * $result=function() use($x){
 * 
 * global $x;
 * }
 * 
 * ------------ Arrow function ---
 * you can execute global viables with out using (global or use)
 * 
 */




// $id=5;
// $name="iti";
// $track="php";

// // Regular functionn

// // function test($n,$w)
// // {

// // // echo $n+$w; // parameters
// // global $id , $name , $track;

// // // echo $id ."  :  ". $name . " : ".$track . "<br>";

// // // }



// // // test(12,14);


// // //=========== function anonoums  =======



// // $result=function () use ($id , $name , $track)
// // {
// //     // global $id , $name , $track;

// // echo $id ."  :  ". $name . " : ".$track ."<br>";

// // };
// // $result();


// // $id=5;
// // $name="iti";
// // $track="php";
// // $x=90;
// // $result=function () use ($id , $name , $track)
// // {
// //     // global $id , $name , $track;
// //     // $x=55;  // block scope 

// // echo $id ."  :  ". $name . " : ".$track ."<br>";

// // };
// // $result();


// // echo $x; // xxxxxxxx error


// /**
//  * global scope  : use except function ==> define as global
//  * 
//  * 
//  * block scope {} : use in block 
//  */



// // $result=fn()=>"hello";
// // $result=fn($x)=>$x;  // return $x

// // echo $result(12);


// // call back function 

// // function trackData($track )
// // {
// //     // return $track; // // return =======> array : print_r , var_dump
// //  return $track["name"];  // string

// //     } 


// // // print_r(trackData(["name"=>"php","id"=>3]));
// // echo(trackData(["name"=>"php","id"=>3]));


// // function trackData($track , $func)
// // {
// //     // $func();
// //     // return $track; // // return =======> array : print_r , var_dump
// //  // string


// // printData();
// //     } 

// //     trackData(5,function(){

// //         echo "hello";
// //     });


// //     function printData()
// //     {
// //         echo "track back End";
// //     }



// //----------- self invoked function || immediatly invoked function

// $track ="php";

// // (fn()=>  print("hello"))(); // xxxxxxxxxxxxxx
// // echo (fn() => "hello")();
// echo (fn() => $track)();





// (function () use($track){
//     // return "hello";
//     global $track;
//     echo $track;

// })();


// $test="test";

// $result=fn()=>$test;
// echo $result();



//========== variable of variable ====

// $name="track";

// $$name="php"; // $track="php
// // $track="php";
// echo  $track;


// $x="y";
// $$x=25; // $y=25
// echo $y;


