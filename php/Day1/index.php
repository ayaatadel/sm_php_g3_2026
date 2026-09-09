<?php
// comment 
#comment 

require "./navbar.php";
// include "./navbar.php";
/**
 * Multi line comment 
 * 
 * ============= variable ========
 * $var_name = value 
 * ----------- php is loosely typed language ---------
 * ------------- Case Sensitive -------------
 * $_var_name;
 * $varName;
 * $nar_name;
 * 
 * == print value 
 * 
 * echo                                              print()               print_r ()                                   var_dump()
 * () : single parameter                            single parameter       at most take 2   parameters                    any number of parameters
 *  echo ; : print any numbers of variables    
 *     
 *   has no return value                          return value              return value                                    return value
 * 
 *   more fast than all functions
 * 
 *   string ==> can't deal with array               string                  array                                          array
 * 
 * 
 * print(T,F) ==> T: 1  false : nothing          T: 1  false : nothing        T: 1  false : nothing                      True: bool(true)   || false: bool(false)
 */

use function PHPSTORM_META\type;

// $x = 5;
// $y = 10;
// $arr = [1, 2, 5, 3, 4];
// get type


// echo( "x: " ,$x ,"  y:", $y ,"<br>"); xxxxxxxx error
// echo( $x);
// echo "x: " ,$x ,"  y:", $y ,"<br>";

// print ( "x: ");   // single parameter
// print_r ( "x: ",$x,"y:",$y);   // at most 2 argumnets


// echo $arr; // Array to string conversion 
// print($arr); // Array to string conversion 


// print_r($arr);  // data Type of vaiable (lenght) (index=> value)
// var_dump($arr,$x,$y,"hello","test","php","iti","bdjd" ,"dmnfdm","bfdbfv");  // data Type of vaiable (index=> data Type of value (value))




// $x=5;
// $X="iti";
// echo $x ,$X;


//----------------  Data types -----

/**
 * integer
 * boolean
 * float
 * array
 * string
 * object
 * null 
 * resource 
 */
# get type of any variabl 
// $x = "bhg";
// // echo  gettype($x);

// echo is_int($x);
// print_r(is_int($x));
// print(is_int($x));
// var_dump(is_string($x));



// ======= Common functions : check data type of variable
/**
 * is_int
 * is_float
 * is_array
 * is_string
 * is_object
 * is_bool
 * 
 */


// ========= casting =======
#setType(var_name,"dataType")
# var_name=(datatype)$var_name

// $x="5";
// echo gettype($x);

// // settype($x,"integer");
// // echo gettype($x);

// $x=(integer)$x;
// echo gettype($x);


/**
 * Arithmetic Operators : (+, -, *, /, %, **)

 *  Comparison Operators :(==, ===, !=, !==, <>, >, <, >=, <=)

 *  Assignment Operators :(=, +=, -=, *=, /=, %=, .=)

 * Logical Operators :(&&, ||, !)

 *  Increment & Decrement Operators : (++, --)
 */

$x = 3;
$y = 3;
// echo "x+y" ,"=" , $x+$y ,"<br>";
// echo "x-y" ,"=" , $x-$y ,"<br>";
// echo "x*y" ,"=" , $x*$y ,"<br>";
// echo "x**y" ,"=" , $x**$y ,"<br>";
// echo "x%y" ,"=" , $x%$y ,"<br>";

// $x=5;
// // $x!=5;  // condition===> false 
// $x<>5;  // condition===> false 
// //$x=$x!=5;  // condition===> false 
// $x=$x<>5;  // condition===> false 
// var_dump($x);
// // if($x<>$y)
//     {
//         echo "true";
//     }else{
//         echo "false";
//     }



// $x=$x+5;
// $x+=5;

// $x=$x-5;
// $x-=5;

// $x=$x*5;
// $x*=5;

// $x=$x/5;
// $x/=5;

// $x=$x%5;
// $x%=5;


/**
 *   conditional statement
 * if
 * if else 
 * if elseif else 
 * switch 
 * ternary operator
 */


$x = 12;
$y = 12;
// if($x>$y)
//     {
//         echo "more than";
//     }else{
//         echo "less than";
//     }



// if($x>$y)
//     {
//         echo "more than";
//     }else if ($x<$y){
//         echo "less than";
//     }else{
//         echo "equal";
//     }


// $grade=90;
// switch ($grade) {
//     case 100:
//        echo "A+";
//         break;
//     case 90:
//        echo "A";
//         break;
//     case 80:
//        echo "B";
//         break;
    
//     case 60:
//        echo "D";
//         break;
    
//     default:
//         echo "fail";
//         break;
// }

// echo "Hi";
// echo "Hi";
// echo "Hi";
// echo "Hi";
// echo "Hi";
// echo "Hi";
/**
 * break  : stop code in  block
 * continue : skip this step and cotinue
 * exit : stop execution of parogram
 */


#--------- ternary operator -----
// $x=0;
// // $condition= ($x>0);
// // echo($condition)?"positive":"negative";
// // echo($x>0)?"positive":"negative";
// // echo($x>0)?"positive":(($x<0)?"negative":"equal 0");
// ($x>0)?print("positive"):(($x<0)?print("negative"):print("equal 0"));



#--------- loops -----
/**
 * for 
 * while 
 * do while
 */


// for($x=1;$x<5;$x++)
//     {
//         echo $x ,"<br>";
//     }
    // $x=10;

    // // while($x<5)
    // //     {
    // //                 echo $x ,"<br>";
    // //                 $x++;

    // //     }

    //     do{
    //         echo $x ,"<br>";
    //                 $x++; 
    //     }  while($x<5);



    #-------------- Array -------
    // $arr=[1,2,3,4];
    // $arr=array("iti","php");
    // print_r($arr);
/**
 * index , length
 * index==> start from index 0
 * length : numbr of array elemnts
 * 
 * --- get lenght  :  count(arr)
 */


    // echo count($arr);


    // for($i=0;$i<count($arr);$i++)
    //     {
    //         echo $arr[$i];
    //         // echo $arr; xxxxxxxxx error
    //     }


/**
 * one dimension array  =>ex:  $arr=[1,2,3,4]; 
 * multi dimenssion array  => ex:  $arr=[[1,2,3],[4,4,5]]; 
 * associative array
 */

//  $arr=[[1,2,3],[4,4,5]];
//     for($i=0;$i<count($arr);$i++)
//         {

//     // print_r($arr[$i]);
//     // echo "<br>";
//       for($j=0;$j<count($arr[$i]);$j++)
//         {
//             echo $arr[$i][$j];
//             echo "<br>";

//         }

//         }

//====== assoicative array ==> array ["key"=>"value"]

$users = [
    "name" => "iti",
    "email" => "iti@gmail.com"
];


// print_r($users);

// ---keys : array_keys($arr_name) ==> array[keys] ==> ["name","email"]
// ---values : array_values($arr_name) ==> array[values] ==> ["iti" ,"iti@gmail.com"]

// print_r(array_keys($users));
// print_r(array_values($users));

// $keys=array_keys($users);
// for ($i=0; $i < count($keys); $i++) { 
//     # code...
//     echo $keys[$i],"<br>";
// }
// $values=array_values($users);
// for ($i=0; $i < count($values); $i++) { 
//     # code...
//     echo $values[$i],"<br>";
// }


// add values in array 


// $arr=[1,2,3];

// array_push($arr,12,13,["php","laravel"]);
// # add , remove from end
// print_r($arr);
// // array_pop($arr);
// // print_r($arr);
// # add , remove from start of array
// echo "<br> *********** <br>";
// array_shift($arr);
// print_r($arr);
// echo "<br> *********** <br>";
// array_unshift($arr,["test"]);
// print_r($arr);

// $users = [
//     "name" => "iti",
//     "email" => "iti@gmail.com"
// ];

// // add value ==> $arr_name["keys"]
// $users["age"] = 36;

// // update on value 
// $users["name"] = "mohammed";
// print_r($users);


// search remove key from array 


//================== code html in php =====

echo "<h1 class='text-danger text-center'> DAY 1 IN PHP </h1>";

$users = [
    "name" => "iti",
    "email" => "iti@gmail.com"
];
$keys = array_keys($users);
$values = array_values($users);

echo "<table class='table table-stripe table-bordered w-75 m-auto'>";
echo "<head>";
echo "<tr>";
// echo "<th>";
// //  echo $keys[0];
// echo "name";
// echo "</th>";
// echo "<th>";
// echo "name";
// echo "</th>";

for ($i = 0; $i < count($keys); $i++) {
    # code...
    echo "<th>" . $keys[$i]  . "</th>";
}
echo "</tr>";
echo "</head>";

echo "<body>";
echo "<tr>";
for ($i = 0; $i < count($values); $i++) {
    # code...
    echo "<td>" . $values[$i]  . "</td>";
}
echo "</tr>";
echo "</body>";

echo "</table>";


// Constatnt variable
const PI=3.13;
Define("TEST","hello");
echo PI;
echo TEST;