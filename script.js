var villageerror=document.getElementById("error-village");
var emailerror=document.getElementById("error-email");
function village(){
    var villagename=document.getElementById("village-name").value;
    if (villagename.length==0){
        villageerror.innerHTML="Village is required";
        return false;
    }
    else
        villageerror.innerHTML="";
        return true;
    
}
function myemail(){
    var myemail1=document.getElementById("my-email").value;
    if(myemail1.length==0){
        emailerror.innerHTML="Email is required";
     
    }
    if(!myemail1.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailerror.innerHTML="Email is incorrect";
      
    }
    else{
        emailerror.innerHTML="Correct";
    }
}