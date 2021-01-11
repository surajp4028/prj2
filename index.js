function validation(pass) 
{ 
    var paas= document.getElementById("cpass");  
  var pas= document.getElementById("pass");
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
if(pas.value.match(paswd)) 
{ 
alert('account created succesfully');
return true;
}
else if(pas.value.length<5)
{ 
alert('Password should not be less than 8 characters');
return false;
}
else if(!(pass.value==cpass.value))
{ 
alert('fill same password');
return false;
}
else
{ 
alert('Please fill password requirements');
return false;
}
}  
