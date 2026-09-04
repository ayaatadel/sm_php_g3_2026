// //=============== get data  from api ======
// /**
//  * API : Application Programming Interface
//  *
//  * link ===> back end ==> front
//  *          api
//  * laravel ====> mobile
//  *
//  * link : data ===> json
//  *
//  *json  :{
//  * "key":"value"
//  * }
//  *             (url)
//  *  resquest  =======> server
//  *
//  *  response <========
//  *
//  * check ===> request already sent
//  *
//  * request:
//  *
//  * check ===> reponse (data) already retrived
//  *
//  *
// //  * hrh : xml http request
// //  *
// //  *
// //  */
// // // var allproducts;
// // // var xhr = new XMLHttpRequest(); //  0
// // // try {
// // //   xhr.open("get", "https://dummyjson.com/products"); //1
// // //   var sendRequest = xhr.send(); //2
// // //   // console.log(sendRequest);

// // //   // check status request

// // //   xhr.onreadystatechange = () => {
// // //     if (xhr.readyState == 4) /// done
// // //     {
// // //       // response
// // //       if (xhr.status == 200) // data
// // //       {
// // //         // var data=xhr.response // string
// // //         // console.log(typeof(data));

// // //         // console.log(data);

// // //         var data = JSON.parse(xhr.response); // ===> convert json string to json object
// // //         //  console.log(typeof(data));
// // //         // console.log(data);// object ===> key:products ==> []
// // //         allproducts = data.products;
// // //         //   products.forEach(product => {
// // //         //     // console.log(product);  // create card

// // //         //   });
// // //         ////////////////////
// // //         // let promise = new Promise(function (resolve, reject) {
// // //         //   resolve(allproducts);
// // //         //   // reject("error")
// // //         //   // resolve();
// // //         // });
// // //         // //  console.log(promise);

// // //         // promise
// // //         //   .then((info) => {
// // //         //     console.log(info);
// // //         //   })
// // //         //   .catch(() => {
// // //         //     console.log("erroor");
// // //         //   });

// // //         ///////////////////////////////
// // //       }
// // //     }
// // //   };
// // // } catch (error) {
// // //   console.log(error);
// // // }

// // // call back hell ===> promise : object ((resolve),(reject))
// // /**
// //  * <fulfilled>: 'success'
// //  * <pending>: 'pending'
// //  * <reject>: 'error'
// //  */

// // var users = [
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// // ];
// // let promise = new Promise(function (resolve, reject) {
// // code
// //   resolve(users);
// //   // reject("error")
// //   // resolve();
// // });
// // //  console.log(promise);

// // promise
// //   .then((info) => {
// //     return info
// //   })
// //   .catch(() => {
// //     console.log("erroor");
// //   });

// // var users = [
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// //   {
// //    id: 2,
// //     name: "iti",
// //   },
// //   {
// //    id: 3,
// //     name: "iti",
// //   },
// //   {
// //    id: 4,
// //     name: "iti",
// //   },
// // ];

// // let promise = new Promise(function (resolve, reject) {
// //  var user={
// //     id:userId,
// //     name:"iti",
// //  }

// // // });var users = [
// // function getUserId(id) {
// //     // var promise =new Promise ((resolve,reject)=>{
// // //   const user = users.find((u) => u.id === id);
// // //     // var user=users.find((user)=>{
// // //     // if(user.id==id)
// // //     // {
// // //     //     return user
// // //     // }
// // //     // })
// // //     if (user) {
// // //       resolve(user);
// // //     } else {
// // //       reject("User not found");
// // //     }
// //     // })
// //     // return promise;

// //   return new Promise(function (resolve, reject) {
// //     const user = users.find((u) => u.id === id);
// //     // var user=users.find((user)=>{
// //     // if(user.id==id)
// //     // {
// //     //     return user
// //     // }
// //     // })
// //     if (user) {
// //       resolve(user);
// //     } else {
// //       reject("User not found");
// //     }
// //   });
// // }

// // // getUserId(4)
// // //   .then((user) => {
// // //     console.log(user); // Output: { id: 4, name: "iti" }
// // //   })
// // //   .catch((err) => {
// // // //     console.log(err);
// // // //   });

// // // //   async function execute()
// // // //   {
// // // //     let users= await getUserId(5); // promise
// // // //     console.log(users);

// // //   }

// // //  execute()
// // var users = [
// //   {
// //     id: 1,
// //     name: "iti",
// //   },
// //   {
// //     id: 2,
// //     name: "iti",
// //   },
// //   {
// //     id: 3,
// //     name: "iti",
// //   },
// //   {
// //     id: 4,
// //     name: "iti",
// //   },
// // ];

// // function getData(users) {
// //   var promise = new Promise(function (resolve, reject) {
// //     console.log(users);
    
// //     resolve(users);
// //   });

// //   return promise;
// // }

// // async function display() {
// //   var test = await getData(users);
// //   // console.log(test);
// //  console.log(test);
 
// // }

// display()


// // var users = [
// //   { id: 1, name: "iti" },
// // //   { id: 2, name: "iti" },
// // //   { id: 3, name: "iti" },
// // //   { id: 4, name: "iti" },
// // // ];

// // // function getData(users) {
// // //   return new Promise(function (resolve, reject) {
// // //     resolve(users);
// // //   });
// // // }

// // // // Consume using async/await
// // // async function displayUsers() {
// // //   const data = await getData(users);
// // //   console.log(data);
// // // }

// // // displayUsers();



// fetch("https://dummyjson.com/products").then(

//     function (response){
//         // console.log(response);
        
//         return response.json() // promise

//     }
// ).then((data)=>{
// console.log(data);

// }).catch(()=>{
//     console.log("error");
    
// })



async function execute()
{
  var reply= await fetch("https://dummyjson.com/products");
  var data=await reply.json()
  console.log(data);
  

}

execute()