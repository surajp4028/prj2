// function validation(pass) 
// {    
//   var pas= document.getElementById("pass");
// var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
// if(pas.value.match(paswd)) 
// { 
// alert('successfully login');
// return true;
// }
// else if(pas.value.length<5)
// { 
// alert('Password is incorrect');
// return false;
// }

// else
// { 
// alert('Password is incorrect');
// return false;
// }
// }  
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'getpost.php';
$uname=$_POST["unname"];
$pass=$_POST["passs"];
    $sql = "SELECT * from login where email='$uname' AND password='$pass'";

    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo " login";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$uname;
        $_SESSION['pass']=$pass;
        header("location: welcome.php");
    }
    else if(!$num){
        echo " wrong";
    }
}

?>
