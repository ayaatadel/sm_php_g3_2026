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
document.title="Day5 js"

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




// ================ style ======
var mainText=document.querySelector("#pg2")

mainText.style.color="red";
mainText.style.border="1px solid black"
mainText.style.padding="15px";

// ``  : ذ
mainText.style.cssText= `
color:red;
border : 1px solid black;
padding: 15px;
text-align:center
`


var bttn=document.getElementById("btn");

bttn.style.cssText=`
border-radius:5px;
border:none;
background-color:brown;
color:white;
padding:5px;
text-align:center

`

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
