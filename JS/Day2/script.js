// undefined , Null , NaN
/**
 * undefined ==> var x;
 * var x=null ==> object
 * Nan : Not A Number
 */

//================ Nan ==========
// var x,y; // undefined
// console.log(x);// undefined
// console.log(x*5);  // NAN ==> undefined *5
// console.log(x+y); // undefined + undefined ===> NAN

/**
 *           Functions : Block of Scode ==> Code ==> reuse
 *           declared function (predefined functions) , user defined functions ==> typeof()
 *
 * User Defined Functions : user write implementation
 * function fun_name(){  ....... code ......   }  ===> call fun_name()
 *
 *    parametarized function : function take parameters
 *   not parametarized function : function doesn't take any parameters
 *
 *   function void ==> has no return  value
 *   function return ==> has return value  + print (log)
 *
 * function void ==> has no return ==> log ===> undefined
 */

// var x , y;
// x=5 ; y=12;
// console.log(x+y);

// function sum()  // un parametarized function
// {
// var w=10 ,x= 5;
// console.log(w+x);

// }

// sum();

// function sum(x,y)  // parametarized function + void
// {

// console.log(y+x);

// }

// // sum:func=> undefined

// // sum(5,12)
// console.log(sum(3,4)); // has no return value

// // var test;
// // console.log(test); // undefined

// function sayHello ()
// {
//     return "hello";   // === value
// }

// //  console.log( sayHello());

// console.log(sum);
// console.log(sayHello());

/**
 * User Defined Function
 * - Function Declaration : function fun_name(){} ==> fun_name()
 * - Expression Function  : var variable=funvtion () {}
 *
 */

// ======================= Function Decleration , regular  ==============
// function sayHello ()
// {
//     return "hello";   // === value
// }
//  console.log( sayHello());

//  function sum(x,y)  // parametarized function + void
// {

// console.log(y+x);

// }
//  sum(5,12)

//  ========= Expression Function  ========

// var result= function ()
// {
//     console.log(" expression function");

// }

// result() // call

// var n=15;

// var sum =function (y=0,x=0)
// {
//     x=n;
//     // console.log(x+y);
//     return x+y;

// }

// // console.log(sum(5,9));
// console.log(sum(12));

// console.log(result);

// var x=10;
// var  res=function(z,n=9)
// {
//     // z=x;
// // console.log(z+n);
// // console.log(x);
// var num=12;
// console.log(num);

// }
// res(11)
// console.log(num);  // function block scope ==> {} xxxx error ==> undefined

//=============== Callback Function : function called by another function =====

// function sayHello(test)
// {
//     // test=track;
//     test();
//     // track()  // sayHello call track  ===> call back function
//     return "hello";
// }

// function track()
// {
//     console.log("php track");

// }
// // var x=track;
// // x()
// // console.log(track);

// // console.log(sayHello(track));
// console.log(sayHello(track));

// track();

// function calculator(operation,n1,n2) // High Order Function
// {
// // operation =sum
// operation(n1,n2) // callback
// return sum(n1,n2)  // callback
// // sum(5,6);  // call back
// // min(18,10) ;
// }
// function sum(x,y)
// {
//     console.log(x+y);
// }
// // // var test;
// // // console.log(sum);

// // // test=sum;

// // // test=function (x,y)
// // // {
// // //     console.log(x+y);

// // // }
// // // test(12,15)
// // function min(x,y)
// // {
// //     console.log(x-y);

// // }

// function mul(x,y)
// {
//     console.log(x*y);
// }
// // sum(5,6);
// // min(18,10)

// // calculator(sum,5,3) // operation =  sum , n1=5 , n2=3
// // calculator(min,15,3) // operation =  min , n1=5 ==> x=5 , n2=3 ==> y=3
// // // sum(5,3)
// calculator(mul,3,8) // call

//======= High Order Function : function that call another function Ex : Calculator function

//======== Anonoumus fumction  : function has no name ====
//-- callback function , exrepression function , event

// var result = (function () {
//   // anonoums
//   return "test";
// }
//========= Arrow function ==> anonoums function =>

//     var result=()=>{
//         return "hello"
//     }
// console.log(result());

// var result=()=> "hello";
//     console.log(result());

//     var result=(x,y)=> x+y;  // return
//     console.log(result(5,3));

//         var result=()=>{
//       console.log("hello");

//     }
// result();

//============ Self Invoked Function || Immediatly invoked Function  ==> IIF=======
// --------------------- function call it self ---------
// (function () {
//   console.log("This runs immediately!");
// })();

// (function (x) {
//   console.log(x);
// })(5);

// ( (x)=>{
//   console.log(x);
// })(5);

//======================= Built In Functions ============

//-- String Functions :
var trackName = "   AITI PHP Summer Training Track  PHP   ";
// var name=prompt("enter your name")
// var email=prompt("enter your email")
console.log(typeof trackName);

// console.log(trackName.toUpperCase());
// console.log(trackName.toLowerCase());
// // console.log(trackName.toLocaleLowerCase().includes(name.toLocaleLowerCase()));
// // console.log(email.toLocaleLowerCase().includes("@"));
// console.log(trackName.indexOf("PHP"));

// console.log(trackName.trim().length); // remove spaces
// console.log(trackName.trimStart().length); // remove spaces
// console.log(trackName.trimEnd().length); // remove spaces
// console.log(trackName.trim().startsWith("ITI")); // remove spaces
// console.log(trackName.startsWith("ITI")); // remove spaces
// console.log(trackName.trim().endsWith("Track")); // remove spaces
// console.log(trackName.length);
// console.log(trackName.padEnd(60,"*"));
// console.log(trackName.padStart(60,"*"));
// console.log(trackName);

// // console.log(trackName.concat("Open Source"));
// // trackName=trackName+"Open Source"
// // trackName=+"open source" // nan
// console.log(trackName);

// console.log(trackName.repeat(5));
// console.log(trackName.replace("PHP","test"));
// console.log(trackName.replaceAll("PHP","test"));
console.log(trackName.trim().charCodeAt(0)); // Asci Code 
console.log(trackName.trim().charAt(0)); // character


// =============== Array : Can Store Different Data types ============
//    0        1       2       3
// var students=["laila","nada","hossam","mahmoud"]
//----------------- index : place of element in array : start 0
//----------------- lenght : number of elements in array : 4 elemnts
// console.log(students);
// console.log(students[0]); // get element in array

// students[0]="fahd"  // update value in array
// console.log(students);

// students[4]="abd elrahman"; // add new value in array
// console.log(students);

/**
 * Add Element in array
 * start  : unshift
 * end    : push
 * Remove
 * srart  : shift
 * end    : pop
 */

// students.unshift("leena","login","malak")
// students.unshift([12,true,5])

// students.push("test")
// students.push(["test","php"])
// console.log(students);

// students.shift()
// console.log(students);

// students.pop()
// console.log(students);

// console.log(students.length); // length of array

// var ar_functions =
// [
//     ()=>{
//       console.log("hello");

//     },
//     function ()
//     {
//         console.log("test");

//     }
// ]

// ar_functions[0]()
// ar_functions[1]()

// //============= Loop on array =======
var students = ["laila", "nada", "hossam", "mahmoud"];
// // for(var i=0;i<=students.length;i++)
// // {
// //     console.log(students[i]);

// // }

// // var test = students ;  // ===> two pointers refer to same place 
// // console.log(students);
// // console.log(test);


// // test.push("iti")
// // console.log(students);
// // console.log(test);
// //------------------------------------ spread operator -----------------
// // spread operator   (...)
// // var test=[...students]
var grades=[100,200,300]
// // var test=[];

// // test=[...students ,...grades]

// // console.log(students);
// // console.log(test);
// // test.push("iti")
// // console.log(students);
// // console.log(test)


// // --------------------- reverse array 

// console.log(students.reverse());
// console.log(students);

// console.log(students.indexOf("nada")); // index of element
// console.log(students.at(3));  // elemnt in this index


// console.log(students.concat(grades)); // not effect on main array
students=students.concat(grades); // reassignment  ==> change in main array
console.log(students);
// console.log(students);




