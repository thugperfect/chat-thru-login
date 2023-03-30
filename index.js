
function login(flag){
    let a= document.getElementById("sign")
    let b=document.getElementById("log")
    if(flag==0){
        a.style.display="block"
        b.style.display="none"
    }
    else if(flag==1){
        b.style.display="block"
        a.style.display="none"
    }
}
 function signvalid(){
     let sn = document.forms["signupform"]["sname"].value
     let su = document.forms["signupform"]["suname"].value
     let sp = document.forms["signupform"]["spasswd"].value
     let sr = document.forms["signupform"]["srepasswd"].value
     let sname = document.getElementById("sname")
     let suname = document.getElementById("suname")
     let spasswd = document.getElementById("spasswd")
     let srepasswd = document.getElementById("srepasswd")
     if(sn == ""){
         sname.innerHTML = "This field should be filled..."
         return false
     }
     else{
         sname.innerHTML=""  
     }
     if(su == ""){
         suname.innerHTML = "This field should be filled..."
         return false
     }
     else{
         suname.innerHTML=""      
     }
     if(sp == ""){
         spasswd.innerHTML = "This field should be filled..."
         return false
     }
     else{
         spasswd.innerHTML=""      
     }
     if(sr == ""){
         srepasswd.innerHTML = "This field should be filled..."
         return false
     }
     else{
         srepasswd.innerHTML=""      
     }

     if(sr != sp){
        srepasswd.innerHTML = "Enter same password..."
        return false
     }
     else{
        srepasswd.innerHTML = ""
     }
 }
 function loginvalid(){
     let lu = document.forms["loginform"]["uname"].value
     let lp = document.forms["loginform"]["passwd"].value
     let luname = document.getElementById("luname")
     let lpasswd = document.getElementById("lpasswd")
     if(lu == ""){
         luname.innerHTML = "This field should be filled..."
         return false
     }
     else{
         luname.innerHTML=""      
     }
     if(lp == ""){
         lpasswd.innerHTML = "This field should be filled..."
         return false
     }
     else{
         lpasswd.innerHTML=""  
     }
 }
  
//  