// ----------- Destructring in array & Object ---------


//================ Array =================
var arr=[1,2,3,12]
// var x=arr[1]
// var y=arr[2]
// var z=arr[3]


// var[x,y,z,w=20]=arr
// console.log(x);
// console.log(y);
// console.log(z);
// console.log(w);


// var[x,,z,w=20]=arr
// console.log(x);
// console.log(z);
// console.log(w);

//------------------ Swap --------

// var x=12;
// var y=14;
// // var temp;
// // temp=x;
// // x=y;
// // y=temp

// [x,y]=[y,x];   
// console.log(x);
// console.log(y);

//================ Object =================

// var user={
//     name:"mahmoud",
//     address:"cairo",
//     age:28,
//     email:"mahmoudEmail@gmail.com"
// }


// var userName=user.name;
// var userAddress=user.address;
// var userAge=user.age;

   // obj_properity : variable
// var {name:userName,age:userAge,address:UserAddress}=user

// console.log(userName);
// console.log(userAge);
// console.log(UserAddress);


// var name=user.name;
// var address=user.address;
// var age=user.age;

// var {name:name,age:age,address:address}=user
// var {name,age,address}=user
// var {name,age,address,email="mahmoud@gmail.com"}=user

// console.log(name);
// console.log(age);
// console.log(address );
// console.log(email );

// var {name:userName,email="mahmoud@gmail.com"}=user
// console.log(userName);
// console.log(email);

// function display(user)
// {
//     console.log(user.name);
//     console.log(user.email);
    

// }



// function display({name,email})
// {
//     console.log(name);
//     console.log(email);
    

// }

// display(user) // var{name,email}=user


//----------------- Hoisting ----------
/**
 * hoisting : use variable ,  call function before decleration
//  */
// console.log(x);
// console.log(result); // undefined
// var x=10;
// var y=12;
// const W=14;
// // result()   //==> unfined() ===> error
// var result=function(){
//     // const W=15;
//     console.log(W);
// }
//  console.log(W); 

// result();
// // console.log(result);

// console.log(W); 
//  console.log(y);
//  console.log(x);
//  console.log(result());  // print output + return (void==> undefined)
//  /**
//   * x=udefined   y=undefined   result=undefined  W=undfined
//   * x=10         y=12          result=fn          W=14  => w=12
//   * 
//   * (call(result(
//   * w=14
//   * ))) 
//   * == log========
//   * undefined   undefined  14 12 15  12 12 10   15  undefined 
//   *  
//   */
 

 
// console.log(y);

// var x=10;
// var y=12;
// console.log(test);
// test();

// function test()
// {
//     var w=15;
//     x=14
//     console.log(x); // 14
//     console.log(w); //15
    
    
// }
// console.log(x); // 14
// test();
// console.log(y);

// undefined error
// undefined test{} ==>  


    // --------------------- Var , Let , Const ---------
    // console.log(x);
    // // console.log(PI);  // eror you can't use PI before initalizationn
    // console.log(y);
    
    var x=12;
    let y=10; //================== used ============
    // const PI=3.14
//     y=14;  ========> reassignment
// console.log(y);
var x=5;  //==========> redecleration
console.log(x);
// let y="php";


    //----------------- Hoisting ----------
/**
 * hoisting : use variable ,  call function before decleration
 * 
 *                    var       let                const 
 * hoisting           accept    not                not 
 * reassignment       accept    accept             not
 * redecleration      accept     not               not
 * 
 * 
 * ---------------------- funtions ---------
 * function decleration (regular function ) : accept hoisting    ex: function fun_name(){}
 * function Expression  :  Not accept hoisting                   ex: var result=function(){} ==>error     
 */