/**
 * DOM : Document object Model 
 * 
 * == document ---> control html elemnts
 * 
 * Select : (getElement)
 * element: id , class ,tag name , name , (query selector , query selector all) ==> like css selectors
 * public:  body , images , title , forms , links 

*/

// var mainText=document.getElementById("pg") // element
// class :  HTMLCollection == array
// var mainText=document.getElementsByClassName("text") // element
// var mainText=document.getElementsByTagName("p") // HTMLCollection
// var mainText=document.querySelector("#pg") // first element ==> node
// var mainText=document.querySelectorAll(".text") //node list ==> array
// console.log(mainText);
// var mainText=document.getElementsByTagName("p") // HTMLCollection

//======= public selectors
document.title = "Day5 js";

// console.log(document.forms);
// console.log(document.body);

// console.log(document.images[0]);

/**
 * innerText : text
 * textContent  : text
 * innerHTML : html code
 */

// var mainText=document.querySelector("#pg2")
// mainText.innerText="test"
// mainText.innerHTML=`
//   <img src="../Day4/imgs/Js_Run_time.png" alt=""  width="200px" height="200px"/>
//  <span>

//   Lorem ipsum dolor sit amet con
//  </span>

//  <button> BUY</button>

// `

// mainText.textContent="<p> lorem </p>"
// console.log(mainText);

// // ================ style ======
// var mainText=document.querySelector("#pg2")

// mainText.style.color="red";
// mainText.style.border="1px solid black"
// mainText.style.padding="15px";

// // ``  : ذ
// mainText.style.cssText= `
// color:red;
// border : 1px solid black;
// padding: 15px;
// text-align:center
// `

// var bttn=document.getElementById("btn");

// bttn.style.cssText=`
// border-radius:5px;
// border:none;
// background-color:brown;
// color:white;
// padding:5px;
// text-align:center

// `

//========== classes ===
/**
 * add class
 * remove class
 * check class exist or not : contains =>(true : class exist) , (false : class not exist)
 * toggle : class exist (remove) , class not exist (add)
 */

// var mainText=document.getElementById("pg")
// // console.log(mainText);
// mainText.classList.add("text-contain","text-info")

// mainText.classList.remove("text-info")
// // mainText.classList.toggle("text-info") // add

// console.log(mainText.classList.contains("text-info"));

// =========== attributes
/**
 * public attributes : class , id , width , heigth
 * element attributes  : arrributes specific for element
 *
 * img : alt , src  , title
 * link : href
 * input : name , placeholders
 * label :for
 * form : method , action
 *
 *
 * ==========
 * get attribute
 * set attribute  --> (add , update)
 * remove attribute
 *
 */

// var img=document.getElementById("img1") // element selector
// // console.log(img);

// // var img1=(document.images)[0] // public selector
// // console.log(img1);

// //======== Get Attribute  ==> element.attribute || element.getAttribute('attribute_name')

// console.log(img.src);
// console.log(img.getAttribute("alt")
// );

// //======= Add Attribute || Update value of attribute ==> element.attribute=value ||  element.setAttribute('atr_name','value')
// // img.title="code";
// img.setAttribute("title","img code ")

// //========= remove attribute
// img.removeAttribute("title")

//=================== create element

// var cardsContainer=(document.getElementsByClassName("cards"))[0];
// cardsContainer.innerHTML=`
//  <h2>Expresso drinks</h2>
//       <p>Lorem ipsum dolor sit amet.</p>

//       <section class="container">
//         <section class="card">
//           <img src="./1.jfif" alt="code" />
//                   <span> 5.30$</span>
//           <p>
//             Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam,
//             nostrum vero?
//           </p>
//         </section>
//         <section class="card">
//           <img src="./1.jfif" alt="code" />
//                   <span> 5.30$</span>
//           <p>
//             Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam,
//             nostrum vero?
//           </p>
//         </section>
//         <section class="card">
//           <img src="./1.jfif" alt="code" />
//                   <span> 5.30$</span>
//           <p>
//             Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam,
//             nostrum vero?
//           </p>
//         </section>
//       </section>
//     </section>

// --------------------------------- create element ---------

// var cardsContainer=document.createElement("section")
// cardsContainer.classList.add("cards")
// // var cardsContainer = document.getElementsByClassName("cards")[0];

// var container = document.createElement("section");
// container.classList.add("container");
// var cardHeader = document.createElement("h2");
// var cardText = document.createElement("p");
// cardHeader.innerText = "Expresso Drinks";

// cardText.innerText = "Lorem ipsum dolor sit amet.";

//             nostrum vero?"

// append child : add one child
// append add more than one child
// document.body.appendChild(cardsContainer);
// cardsContainer.appendChild(container);
// container.append(cardHeader, cardText);
// var card;

// function createCard(img, title, text) {
//   card = document.createElement("section");
//   card.classList.add("card");

//   var cardimg = document.createElement("img");
//   cardimg.src = img;
//   var cardPrice = document.createElement("span");
//   cardPrice.innerText = title;
//   var cardTitle = document.createElement("p");
//   cardTitle.innerText = text;
//   card.append(cardimg, cardPrice, cardTitle);
//   container.append( card);
// }
// createCard(
//   "./1.jfif",
//   "5.30$",
//   " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",
// );
// createCard(
//     "./1.jfif",
//     "5.30$",
//     " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",
// );
// createCard(
//     "./1.jfif",
//     "5.30$",
//     " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",
// );


// var products=[
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
//     {
//         img:"./1.jfif",
//         price:"5.30$",
//         title:" Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam",

//     },
// ]

// products.forEach((product)=>{
//     // console.log(product);

//     createCard(product.img,product.price,product.title)

// })



//=============== remove elemment ======
/**
 * create 
 * select 
 */
// Element.remove()
// cardsContainer.remove()



// ========== Event ============

/**
 * Action :  execute 
 * 
 * onEvent  ==> onClick  : execute on event 
 * addEventListener   ==> addEventListener('click')==> can execute more than event on same element
 * 
 * 
 */

// var bttn=document.getElementById("btn");

// bttn.onclick=()=>{
//     console.log("hello");
    
// }



// bttn.onclick=function()
// {
//     console.log("php");
    
// }


// bttn.addEventListener('click',function (){
//      console.log("hello");
    
// })
// bttn.addEventListener('click',()=>{
// console.log("php");
// })



// bttn.addEventListener('click',print)
// function print()
// {
//     console.log("print");
    
// }

// var result=()=>{
//     console.log("result");
    
// }
// bttn.addEventListener('click',result)

// //============= ex1
// var bttn=document.getElementById("btn");
// var inputTex=document.getElementById("text");
// var outText=document.getElementById("output");





// bttn.addEventListener('click',function (){

//    outText.innerText=inputTex.value; 
// })




//============= ex2
// var bttn=document.getElementById("btn");
// var inputTex=document.getElementById("text");
// var outText=document.getElementById("output");



// // inputTex.addEventListener('keydown',(e)=>{
// // // outText.innerText=inputTex.value; 
// // // console.log(e.key);
// // console.log(e.code);

// // })
// // // inputTex.addEventListener('keyup',()=>{
// // // outText.innerText=inputTex.value; 
// // // })

// // var formData=document.getElementById("form");

// // bttn.addEventListener('click',(e)=>{
// //     e.preventDefault();
// // console.log(e);
// // console.log(e.target);

// // })


// //=============== BOM : Browser Object Model ===
// /**
//  * object : browser 
//  * window object ===> window
//  */

// var btnOpen =document.getElementById("openBtn");
// var btnClose =document.getElementById("closeBtn");
// var btnResizeTo =document.getElementById("resizeToBtn");
// var btnResizeBy =document.getElementById("resizeByBtn");
// var moveToBtn =document.getElementById("moveToBtn");
// var moveByBtn =document.getElementById("moveByBtn");

// var win;
// btnOpen.addEventListener('click',()=>{
// win=window.open("./about.html","_blank","width=100;height=100")
// })
// btnClose.addEventListener('click',()=>{
//     win.close()
// })
// btnResizeTo.addEventListener('click',()=>{
//     win.focus();
//     win.resizeTo(200,200)
// })
// btnResizeBy.addEventListener('click',()=>{
//     win.focus();
//     win.resizeBy(100,100)
// })
// moveToBtn.addEventListener('click',()=>{
//     win.focus();
//     win.moveTo(100,100)
// })
// moveByBtn.addEventListener('click',()=>{
//     win.focus();
//     win.moveBy(100,100)
// })


//================ history ==
/**
 * window.history.back()
 * window.history.forward()
 * window.history.go()
 */

