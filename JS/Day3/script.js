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