

function sign_up(){
    
  document.getElementById("usernameID").setAttribute("name", "username");
  document.getElementById("passwordID").setAttribute("name", "password");

var inputs = document.querySelectorAll('.input_form_sign');
document.querySelectorAll('.ul_tabs > li')[0].className=""; 
document.querySelectorAll('.ul_tabs > li')[1].className="active"; 
  
  for(var i = 0; i < inputs.length ; i++  ) {
if(i == 2  ){

}else{  
document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
}
} 

setTimeout( function(){
for(var d = 0; d < inputs.length ; d++  ) {
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block active_inp";  
   }


 },100 );
 
   document.querySelector('.btn_sign').innerHTML = "SIGN UP";    
  setTimeout(function(){

 document.querySelector('.terms_and_cons').style.opacity = "1";
  document.querySelector('.terms_and_cons').style.top = "5px";
 
  },500);
  setTimeout(function(){
    
 document.querySelector('.terms_and_cons').className = "terms_and_cons d_block";
  },450);

  
}



function sign_in(){

  document.getElementById("usernameID").setAttribute("name", "username_used");
  document.getElementById("passwordID").setAttribute("name", "password_used");

var inputs = document.querySelectorAll('.input_form_sign');
document.querySelectorAll('.ul_tabs > li')[0].className = "active"; 
document.querySelectorAll('.ul_tabs > li')[1].className = ""; 
  
  for(var i = 0; i < inputs.length ; i++  ) {
switch(i) {
    case 1:
 console.log(inputs[i].name);
        break;
    case 2:
 console.log(inputs[i].name);
    default: 
document.querySelectorAll('.input_form_sign')[i].className = "input_form_sign d_block";
}
} 

setTimeout( function(){
for(var d = 0; d < inputs.length ; d++  ) {
switch(d) {
    case 1:
 console.log(inputs[d].name);
        break;
    case 2:
 console.log(inputs[d].name);

    default:
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign d_block";  
 document.querySelectorAll('.input_form_sign')[2].className = "input_form_sign d_block active_inp";  

   }
  }
 },100 );

 document.querySelector('.terms_and_cons').style.opacity = "0";
  document.querySelector('.terms_and_cons').style.top = "-5px";

  setTimeout(function(){
 document.querySelector('.terms_and_cons').className = "terms_and_cons d_none"; 


 },500);

  setTimeout(function(){

for(var d = 0; d < inputs.length ; d++  ) {

switch(d) {
    case 1:
 console.log(inputs[d].name);
        break;
    case 2:
 console.log(inputs[d].name);

         break;
    default:
 document.querySelectorAll('.input_form_sign')[d].className = "input_form_sign";  
}
  }
   },1500);
   document.querySelector('.btn_sign').innerHTML = "SIGN IN";    
}


function setAction(){
  
  let text = document.getElementById("usernameID").getAttribute("name");

  if(text == "username_used"){
    document.getElementById("form126").action = "Dashboard_admin/dashboard-admin.php";
  }
  else{
    document.getElementById("form126").action = "signup_admin.php";
  }
}

function comparePasswords(){
  var pass1 = document.getElementById("conf_passwordId").value;
  var pass2 = document.getElementById("passwordID").value;
  if(pass1 != pass2){
    document.write("both the passwords must match");
  }
}


window.onload =function(){
  document.querySelector('.cont_centrar').className = "cont_centrar cent_active";

}
