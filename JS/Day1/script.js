// Comment    shift+ظ 
/**
 * Documentation 
 */

// var x=10;  // decleration variable + assignment
// // x=12; // reassignment 
// // var x="php"; // redecleration + assignment
// const PI=3.14; // constant variable 
// let name="iti"; 
/**
 * var , let , const 
 * Java Script Loosely Typed Language    ===> value of variable 
 * 
 * 
 * var x ==> declare 
 * x=5; assignment 
 * typeof(x)
 * 
 * 
 * console.log(x)
 */

// console.log(typeof(x)); // number
// console.log(typeof(PI)); // number
// console.log(typeof(name)); // string 
// var isStudent=true; // boolean
// var x; // undefined
// var w=undefined; // undefined  ===> مفيش قيمه محدده
// var n= null; // object  ====. value = null  ==> قاصد ان مفيش قيمه
// var studentNames=["mohammed","mahmoud","nada"]// array
// var data={name:"haneen"};
// console.log(typeof(n)); 
// console.log(typeof(w)); 
// console.log(typeof(studentNames)); 
// console.log(typeof(data)); 
//
/**
 *  ============ Data types ======
 * number 
 * string 
 * object 
 * boolean 
 * undefined 
 * null
 * array
 */




/**  
 * ============== variable name
 * js ==> case Sensetive ==> var n xxxxx var N
 * _ , $
 * it mustn't start with number 
 * small 
 * more than one word ===> user_name , userName
 * not allowed reserved key word ===> var , let , const , if , while , console 
 * 
 * expressevie ==> var userName ,   var userAge
 */



//============  operators============== 
/**
 * arithmetic Operators (+,-,*,/,** , %)
 * Assignment Operators (= , =+ , -= , *= ,/= )
 * Comparoson Operators  (> , < , >= , <= ,!= ,!== ,=== ,!==)
 * logical Operators 
 * ternary operator
 * 
 */

//  arithmetic Operators (+,-,*,/,** , % ,++ ,--)
// var x=12;
// var y=5;

// console.log(x+y); //17
// console.log(x-y); // 7
// console.log(x*y); // 60
// console.log(x/y); // 2.4
// console.log(x%y); // 2 ===> 12/5 ==> 2 = 2*5 = 10 ===> 12-10=2
// console.log(x**y); // 248832

// // 10 % 3=  10/3 =3 ==> 3*3=9 ===? 10-9 =1 


// ==================  
// console.log(x++);   // post increment  ===> 12 ---- 13
// console.log(x);

// console.log(++x);  // pre increment  ====> 13 --> 13
// console.log(x);


// x=x+1;
// x++;

// Assignment Operators

// x+=1;  //==> x=x+1
// x*=1;  //==> x=x*1
// x-=1;  //==> x=x-1
// x/=1;  //==> x=x/1

// Comparison Operator




// var x=12;
// var y=5;

// console.log(x>y);  // true
// console.log(x<y); // false
// console.log(x<=y); // false
// console.log(x>=y); // true
// console.log(x==y); // false
// console.log(x===y); // false
// console.log(x!=y); // true
// console.log(x!==y); // true



// Logical Operator 
/**
 * &&  ==> true (Two conditions = true)
 * ========
 * (true) && (true) =true
 * (true) && (false) =false
 * (false) && (false) =false
 * (false) && (true) = false
 * ========
 * || ==> true (any one of condition = true)
 * ========
 * (true)  || (true) =true
 * (true)  || (false) =true
 * (false) || (false) =false
 * (false) || (true) = true
 * ========
 * !  ==> condition (true)=false 
 * !  ==> condition (false)=true
 */




// var x=12;
// var y=5;

// console.log((x>y)&&(y<x));
// console.log((x>y)&&(y>x));
// console.log((x<y)&&(y>x));
// console.log((x<y)&&(y<x));

// console.log((x>y)||(y<x));
// console.log((x>y)||(y>x));
// console.log((x<y)||(y>x));
// console.log((x<y)||(y<x));

// console.log(!(x>y));
// console.log(!(x<y));


/**
 * == : value
 * === : value and data type
 */

// x=5;
// y="5";

// // console.log(x<=y); // false   (x<y) || (x==y)
// // console.log(x>=y); // true   (x>y) || (x==y)
// console.log(x==y); // false   (x==y)  ==> value
// console.log(x===y); // false (value(x)==value(y) )&& ((typeof(x)==(typeof(x))))
// console.log(x!=y); // false  (!(value(x)==value(y)))
// console.log(x!==y); // true !(value(x)==value(y) )&& ((typeof(x)==(typeof(x))))


// ============= condition ===============
/**
 * if 
 * if else 
 * if elseif else 
 * switch 
 */



// var grade=80;
// if(grade>=60)  // condition
// {
//     // true

//     console.log("you are success");
// } 
// else{
             
//     console.log("fail");  // false 
// }
var x=0;

// if(x>0)
// {
//      console.log("positive");
     
// }
// else if (x<0)
// {
//     console.log("negative");
    
// }
// else{
//     console.log("equal 0");
    
// }



// switch  ===> equality 

var grade=60;

// switch (grade) {
//     case 90:  // grade==90
//         console.log("grad A");
//         break;  // stop execution of switch
//     case 80 :
//         console.log("grade B");
//         break;
//     case 70 :
//         console.log("grade c");
//         break;
//     case 60 :
//         console.log("grade D");
//         break;

//     default:
//         console.log("fail");
//         // break;
// }




// ======== ternary operator =====
//   (condition)?true:false; 

// var x=0;
// // (x>=0)?console.log("positive"):console.log("negative");


// (x>0)?console.log("positive"):(x<0)?console.log("negative"):console.log("0");



// ============ Control flow (loop)
/**
 * for (inialization ; condition ; increment || decrement )  
 *  for(;;);  // infinity loop
 * while
 * do while 
 * ===========================
 * for each 
 * filter 
 * map 
 * find 
 * some 
 * 
 */

// console.log(1);
// console.log(2);
// console.log(3);
// console.log(4);
// console.log(5);

// var x; // === undefined ===> 1
// for(x=1;x<=5;x++)
// {
//     console.log(x);  // 1 2 3 4 5
    
// }



// while 
// var x=1;
// // while(x<=5)
// // {
// //     console.log(x);
// //     x++;
    
// // }

// // do {} while ()

// do{
//     console.log(x);
//     x++;
    
// }while(x<=5);




// ================ User ===========

/**
 * Prompt ==> data type (string)
 * string====> Number ===> +Prompt   ==> Number(prompt)
 */
// var age=+prompt("Enter U Age");  
// var age=Number(prompt("Enter U Age"));  
// console.log(age);


// var name=prompt("Enter U Name");
// console.log(name);


// console.log(typeof(name));
// console.log(typeof(age));


// alert("Check Your Number")
// var n=+prompt("Enter positive number");  
// if(n>0)
// {
//     alert("positive")
// }else{
//     alert("Check Your Number")
// }


// confirm 
// var isStudent = confirm("Are You Student");  // True , False

// if(isStudent)
// {
//     // alert("studnt")
//     document.writeln("<h2 style='color:red ; text-align:center'>  studnt </h2> ")
// }else{
//     // alert("not Student")
//       document.writeln("<h2 style='color:red ; text-align:center'>  Not studnt </h2> ")
// }


