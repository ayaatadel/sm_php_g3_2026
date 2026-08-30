// var arr=[1,2,3];  // index , length

// for(var i=0;i<=arr.length;i++)
// {
// console.log(arr[i]); // i ==> index   , length=3

// }

// var arr=[1,2,3];

// var students=[[1,2,3],["malak","habiba","haneen"] , ["php","sql","laravel"]]  // multi dimension array

/**
 * [
 * 1 2 3
 * 4 5 6
 * 7 8 9
 * ]
 *
 */

// for(var i=0;i<students.length;i++)
// {
//   // console.log(students[i]);

//   for(var j=0;j<students[i].length;j++)
//   {
//         console.log(students[i][j]);

//       }
//       console.log("*************************************************");
// }

// =================== Array Apis   ==> function ==> callback function ===============
/**
 * foreach   ===> has no return
 * map
 * filter
 * find
 * some
 * every
 * reduce =============> self studey
 */

// ------------- foreach ----------------

// var arr=[1,2,3];

// arr.foreach((element , index , arr)=>{

// })

// arr.forEach(function(element , index , arr){
//       // element in array
//       // index of every elemnt in  array
//       // array
// // console.log(element);
// // console.log(index);
// // console.log(arr);
// console.log(element);

// })

// var students=[
//   [1,2,3],
//   ["malak","habiba","haneen"] ,
//   ["php","sql","laravel"]
//   ]

// // students.forEach(function(ele)
// // {
// //   // console.log(ele); //
// //   ele.forEach((value)=>
// //   {
// //     console.log(value);
// //   })
// //   console.log("**************");

// // })

// students.forEach((ele)=>{
// ele.forEach((x)=>{
// console.log(x);

// })
// })

//------------------------------------- Object ------------------
/**
 * Key
 * value
 * ================== handel values ========
 * 1- prcatice  ex: data["id"]
 * 2- .         ex: data.address
 */

// var data={
//   id:1,
//   name:"hannen",
//   address : "menoufia"

// }

// console.log(data);

// console.log(data["id"]);  // get value
// console.log(data["name"]);

// data['name']="nada"
// console.log(data.address);

// ==============

// var data=[
//   {
//   id:1,
//   name:"hannen",
//   address : "menoufia"
//   },
//   {
//   id:2,
//   name:"mahmoud",
//   address : "cairo"
//   },
//   {
//   id:3,
//   name:"mohammed",
//   address : "alex"
//   },
//   {
//   id:4,
//   name:"nada",
//   address : "banha"
//   },

// ]

// data.forEach((ele ,index,arr)=>{
// // console.log(index);
// console.log(ele); // object ==> objName.key  ||  objName['key']
// // console.log(arr);

// console.log(ele.id);
// console.log(ele.name);
// console.log(ele.address);

// })

// ------------- Map ----------------
/**
 * return value
 * value : array ==> with same main array length
 * condition false ==> array [ [undefined, undefined, undefined, undefined]
 * 
 */
// var data = [
//   {
//     id: 1,
//     name: "hannen",
//     address: "menoufia",
//     age: 23,
//   },
//   {
//     id: 2,
//     name: "mahmoud",
//     address: "cairo",
//     age: 24,
//   },
//   {
//     id: 3,
//     name: "mohammed",
//     address: "alex",
//     age: 25,
//   },
//   {
//     id: 4,
//     name: "nada",
//     address: "banha",
//     age: 22,
//   },
// ];

// var result = data.map((ele) => {
//   // console.log(ele);
//   // return ele.id > 1;

//   if(ele.age>23)
//   {
//     return ele;     //[undefined, {…}, {…}, undefined]
//   }
// });

// console.log(result);



//------------------------ filter ----------
/**
 * return value ===> array : elemnts that make condition true
 * condition : value false for all elemnts ==> []
 */
// var result = data.filter((ele) => {
//   // console.log(ele);
//   // return ele.id > 1;

//   if(ele.age>23) 
//   {
//     return ele;     //[{…}, {…}]
//   }
// });

// console.log(result);


// // //--------------------- find -------------
// // /**
// //  * return first element execute condition
// //  */
// var result = data.find((ele) => {
//   // console.log(ele);
//   // return ele.id > 1;

//   if(ele.age>23) 
//   {
//     return ele;     
//   }
// });

// console.log(result);


// //--------------------- every -------------
// /**
//  * return ==> true || false 
//  * true  : all elemnts execute condition 
//  * false : if any element doesn't execute condition
//  */
// var result = data.every((ele) => {
//   // console.log(ele);
//   // return ele.id > 1;

//   return ele.age>23
// });

// console.log(result);



//--------------------- Some -------------
/**
 * return ==> true || false 
 * true  : if any element execute condition 
 * false : all element doesn't execute condition
 */
// var result = data.some((ele) => {
//   // console.log(ele);
//   // return ele.id > 1;

//   return ele.age>23
// });

// console.log(result);




//------------------------------------- Object ------------------
/**
 * Key
 * value
 * ================== handel values ========
 * 1- prcatice []  ex: data["id"]
 * 2- dot (.)        ex: data.address
 * object.assign()
 *  object.keys : array has all keys
 *  object.entries : array has array has each key and value
 *  object.values : array has all values
 * 
 * freeze  : prevent user add , update 
 * seal  : permit user update but prevent user add any values in object
 */

// var data={
//   id:1,
//   name:"hannen",
//   address : "menoufia"

// }


// console.log(data["id"]);  // get value
// console.log(data.name);

// data['name']="nada"  // update on value 
// console.log(data.address);


// // add new value 
// data.age=25;
// console.log(data);


// get  all values 
// console.log(Object.values(data)  );
// // get all keys
// console.log(Object.keys(data)  );
// // get all keys and values ==> array 
// console.log(Object.entries(data)  );



// var test={};
// // test={...data};  // spread operator
// // console.log(test);
// // test.name="mahmoud"
// // console.log(test);
// // console.log(data);
          
//         // (target , source )
// Object.assign(test,data)

// console.log(test);
// console.log(data);

// test.name="mahmoud"
// console.log(test);
// console.log(data);


// var data={
//   id:1,
//   name:"hannen",
//   address : "menoufia"

// }

// // Freeze : prevent user add , update 
// // Object.freeze(data)
// // data.name="mahmoud"
// // console.log(data);

// // data.age=23
// // console.log(data);

// // seal  : prevent user add new value on object and permit update values in object
// Object.seal(data)

// data.name="mahmoud" // update
// console.log(data);
// data.age=23  // add new value
// console.log(data);



// var data={
//   id:1,
//   name:"hannen",
//   address : "menoufia",
//   // print :()=>
//   // {
//   //   // this ==> refer on window
//   //   console.log(this);
  
         
//   // },

//   // print:function()
//   // {
//   //   // console.log(this); : current object 
//   //   console.log(this.id);
//   //   console.log(this.name);
//   //   console.log(this.age);
    
    
//   // }
//   // print()
//   // {
//   //   // console.log(this); : current object 
//   //   console.log(this.id);
//   //   console.log(this.name);
//   //   console.log(this.age);
    
    
//   // }

// }

// console.log(data);

// // data.print() // call 

// ---------------------------- predefined object ------
/**
 * Math 
 * date
 */

// var names=["mohammed", "mahmoud","nada"]
// console.log(Math.sin(30));
// console.log(Math.cos(30));
// console.log(Math.PI);
// console.log(Math.max(12,19,88));
// console.log(Math.min(12,19,88));
// console.log(Math.min(...numbers));
// // console.log(Math.max(...numbers));

// console.log(Math.floor(-3.1)); // تقريب للرقم الاقل
// console.log(Math.ceil(-3.1)); // بتقرب للرقم الاكبر
// // console.log(Math.trunc(3.5));  // بتشيل الكسر
// // console.log(Math.trunc(-3.5));  // remove numbers after sign

// // console.log(Math.trunc(Math.random()*10)); // 0-10
// // console.log(Math.trunc(Math.random()*names.length)); // 0- array.length
// //     // 0 -- arr.length

// // var names=["mohammed", "mahmoud","nada"]
// // // names.pop();
// // // names.pop();
// // // names.unshift("ali","hossam");
// // var index=Math.floor(Math.random()*names.length) // rendom index
// // var index=Math.trunc(Math.random()*names.length) // rendom index
// // console.log(names[index]);


// // var names=["mohammed", "mahmoud","nada"]

// // function randomaNames(arr)
// // {
// //   index=Math.trunc(Math.random()*arr.length)
// //   return    arr[index];
// // }

// // // randomaNames(names)
// // console.log(randomaNames(names));

// console.log(Math.sqrt(9));
// console.log(Math.pow(3,3));
// console.log(Math.abs(-6));
// console.log(Math.round(-6.5));
// console.log(Math.round(6.5));


//---------------------- date object ----------

var date=new Date(); 
//[sunday , monday , ...]
// console.log(date);
// console.log(date.getFullYear()); // year
console.log(date.getDay()); // index of day of week start with 0(sunday)-6(saterday)
console.log(date.getDate()); // number of day in month ==> start with 1 
// var currentDay=(date.getDate())+5
// console.log(currentDay);

console.log(date.getHours()); // hour
console.log(date.getMinutes()); // minutes


//========== Synchronous and Asynchronous functions 

/**
 *  Synchronous  : function execute line by line 
 *  Asynchronous : depend on time , event ==> api , setTimeOut , setInterval 
 */


// function print ()
// {
//   // first()  
  
//   console.log("print");
// }

// function first()
// {
//   // console.log("first");
//   setTimeout(() => {
//   console.log("first funtion");
  
// }, 2000);
  
// }

// print()
// first()

// setTimeout(() => {
//   console.log("async funtion");
  
// }, 1000);

// setInterval(() => {
//   console.log("hello");
  
// }, 1000);


/**
 * time : ms ==> 1000ms = 1s
 * setTimeout : function execute after time 
 * setInterval : function repete execute every time 
 * clearInterval : function stop interval (تكرار)of setInterval  
 */


//  var interval=setInterval(() => {
//   console.log("hello");
  
// }, 1000);

// setTimeout(() => {

//   clearInterval(interval)
 

// }, 5000);



