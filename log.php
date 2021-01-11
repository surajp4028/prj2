<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST['uname'];
    $c=$_POST['pass'];
    $sql = "SELECT * from signup where username='$a' AND password='$c'";
    if($sql){
        echo " login";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$a;
        $_SESSION['pandey']=$b;
        header("location: index.html");
    }
    else if(!$num){
        echo " wrong";
    }
}

?>