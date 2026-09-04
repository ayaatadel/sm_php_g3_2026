// // ----------- Destructring in array & Object ---------

// //================ Array =================
// // var arr=[1,2,3,12]
// // // var x=arr[1]
// // // var y=arr[2]
// // var z=arr[3]

// // var[x,y,z,w=20]=arr
// // console.log(x);
// // console.log(y);
// // console.log(z);
// // console.log(w);

// // var[x,,z,w=20]=arr
// // console.log(x);
// // console.log(z);
// // console.log(w);

// //------------------ Swap --------

// // var x=12;
// // var y=14;
// // // var temp;
// // // temp=x;
// // // x=y;
// // // y=temp

// // [x,y]=[y,x];
// // console.log(x);
// // console.log(y);

// //================ Object =================

// // var user={
// //     name:"mahmoud",
// //     address:"cairo",
// //     age:28,
// //     email:"mahmoudEmail@gmail.com"
// // }

// // var userName=user.name;
// // var userAddress=user.address;
// // var userAge=user.age;

// // obj_properity : variable
// // var {name:userName,age:userAge,address:UserAddress}=user

// // console.log(userName);
// // console.log(userAge);
// // console.log(UserAddress);

// // var name=user.name;
// // var address=user.address;
// // var age=user.age;

// // var {name:name,age:age,address:address}=user
// // var {name,age,address}=user
// // var {name,age,address,email="mahmoud@gmail.com"}=user

// // console.log(name);
// // console.log(age);
// // console.log(address );
// // console.log(email );

// // var {name:userName,email="mahmoud@gmail.com"}=user
// // console.log(userName);
// // console.log(email);

// // function display(user)
// // {
// //     console.log(user.name);
// //     console.log(user.email);

// // }

// // function display({name,email})
// // {
// //     console.log(name);
// //     console.log(email);

// // }

// // display(user) // var{name,email}=user

// //----------------- Hoisting ----------
// /**
//  * hoisting : use variable ,  call function before decleration
// //  */
// // console.log(x);
// // console.log(result); // undefined
// // var x=10;
// // var y=12;
// // const W=14;
// // // result()   //==> unfined() ===> error
// // var result=function(){
// //     // const W=15;
// //     console.log(W);
// // }
// //  console.log(W);

// // result();
// // // console.log(result);

// // console.log(W);
// //  console.log(y);
// //  console.log(x);
// //  console.log(result());  // print output + return (void==> undefined)
// //  /**
// //   * x=udefined   y=undefined   result=undefined  W=undfined
// //   * x=10         y=12          result=fn          W=14  => w=12
// //   *
// //   * (call(result(
// //   * w=14
// //   * )))
// //   * == log========
// //   * undefined   undefined  14 12 15  12 12 10   15  undefined
// //   *
// //   */

// // console.log(y);

// // var x=10;
// // var y=12;
// // console.log(test);
// // test();

// // function test()
// // {
// //     var w=15;
// //     x=14
// //     console.log(x); // 14
// //     console.log(w); //15

// // }
// // console.log(x); // 14
// // test();
// // console.log(y);

// // undefined error
// // undefined test{} ==>

// // --------------------- Var , Let , Const ---------
// // console.log(x);
// // // console.log(PI);  // eror you can't use PI before initalizationn
// // console.log(y);

// //     var x=12;
// //     let y=10; //================== used ============
// //     // const PI=3.14
// // //     y=14;  ========> reassignment
// // // console.log(y);
// // var x=5;  //==========> redecleration
// // console.log(x);
// // let y="php";

// //----------------- Hoisting ----------
// /**
//  * hoisting : use variable ,  call function before decleration
//  *
//  *                    var       let                const
//  * hoisting           accept    not                not
//  * reassignment       accept    accept             not
//  * redecleration      accept     not               not
//  *
//  *
//  * ---------------------- funtions ---------
//  * function decleration (regular function ) : accept hoisting    ex: function fun_name(){}
//  * function Expression  :  Not accept hoisting                   ex: var result=function(){} ==>error
//  */

//================= Asynchronous Function  (js run time)====================

// function first() {
//   console.log("first");
// }
// // console.log(result);

// // var result = setTimeout(() => {
// //   console.log("time out");
// // }, 0);

// // function second() {
// //   console.log("second");
// // }

// // first();
// // // console.log(result);
// // second();



// // ============= 

// function first()
// {
    
//     setTimeout(() => {
//         var x=10;
//         console.log(x);
        
//     }, 0);
//     setTimeout(() => {
//         console.log("test");
        
        
//     }, 0);
//     // console.log(x); // error
//     console.log("first");
    
// }

// first()

// function second()
// {
//     console.log("second");
//       setTimeout(() => {
//         console.log("test 2" );
        
        
//     }, 0);
    
// }

// second()


// -------------- constructor function -------
/**
 * function create more than one object
 * this refer on current object
 * has no return but function ==> as default return current object
 * naming : pascale case : firts char in every word capital
 * User , UserAddress 
 */


// function User(name,age)
// {
// console.log(this); // this refer on object with name user

// this.name=name;
// this.age=age;
// }


// var result=new User("php",50)
// // result ---> user={name:"php",age:50}
// console.log(result);  // object ===> user

// var x=new User("mohammed",22)
// console.log(x);



// ========= ES6
/**
 * oop ==> class (strucure of code) , object (instance of class)
 * 
 * 
 * princebles :
 * inheritance
 * polymorphism  ==>  Override , overloading
 * override : same  function name + same parameters but return is different
 * overloading : same function name + different parameters (datatype , numbers) + return is different
 * abstraction
 * encapsulation : (كبسوله)
 * --- setter , getter 
 * 
 */
// class User{
//     constructor(name,age,email,role)
//     {
//         this.name=name;
//         this.age=age;
//         this.email=email
//         this.role=role
//         // this.password=this.password;
//     }

//     set password(password)
//     {
//            this.password=password;
//     }
//     get password()
//     {
//         return this.password;
//     }
//     login()
//     {
//         // this refer on current object
//         console.log(this.name);
//         console.log(this.email);
//         console.log(this.role);
        
        
//     }
//      print()
//     {
//         console.log("user");  
        
//     }

// }

// class Person extends User
// {
//     constructor (phone)
//     {
//         this.phone=phone;

//     }
//     login (name)
//     {
//         console.log(name);  // overloading
        
//     }
//     print ()
//     {   // override
//         console.log(this.name);
        
//     }

// }

// let user= new User("mahmoud",30,"mahmoud@gmail.com","admin");
// let user2=new User("nada",35,"nada@gmail.com","user")


// user.login()
// user2.login()


//======= this refer on current object 
/**
 * change caller of this 
 * call   : change caller of this + run function + can take parameters   ==> call now
 * apply  : change caller of this + run function + can take parameters  in array  ==> call now + array 
 * bind   : change caller of this + doesn't run automatic  function + can take parameters   ==> bind for later
 */



var person ={
    name:"hossam",
    email:"hossam @gmail.com",
    login(){
        console.log(this);
        console.log(this.name);
        console.log(this.email);
    }

}

var user={
      password:"1234",
    register(address,x,y)
    {
        // console.log(this);
        console.log(address);
        console.log(x);
        console.log(y);
        
        
        console.log(this.name);
         
    }
}

// person.login()

// user.register();
// user.register.call(person,"cairo",12,"track")
// user.register.apply(person,["cairo",12,15])
// user.register.bind(person,"cairo",13,19)()


/**
 * DOM : Document object Model 
 * 
 * document ==> html 
 * select ===> get , create new element , add new element 
 * id 
 * class
 * tagname 
 * name 
 * 
 * ------------
 * title
 * images
 * forms
 * body
 * 
 * 
 * ========== cotenet of elemnt ======
 * innerHTML : change html 
 * 
 */



let text=document.getElementById("container") // element
let textClass=document.getElementsByClassName("main-section") // html collection ==> array (key: index) value(element)
let text2=document.getElementsByClassName("main-section")[0] // html collection ==>access by index
let text3=document.getElementsByTagName("p") // html collection 
let text4=document.getElementsByName("userName") // Node list ==> array
let text5=document.querySelector("#container")// Node element   ====> css  ==> first elenmnet
let text6=document.querySelectorAll(".main-section")// Node list
// console.log(document);
// console.log(text2);
// console.log(text4);
console.log(text5);
console.log(text6);
// console.log(textClass);


let pg=document.getElementById("text")
text.innerHTML=`
<div style='color:red'> add new content </div>
`

// text.innerText=`
// <div> add new content </div>
// `

pg.innerText=`new paragarph text loreeeeeeeeeeeeeeeeeeeeeeeeeem`


console.log(document.title);
console.log(document.body);
