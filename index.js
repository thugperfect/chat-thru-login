
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