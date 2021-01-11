<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'sign.php';
    $a=$_POST['uname'];
    $b=$_POST['email'];
    $c=$_POST['pass'];
    $d=$_POST['cpass'];
    if(($pass==$cpass)){
    $sql = "INSERT INtO signup (username, email, password, cpassword) VALUES ('$a','$b','$c','$d')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo " Account created successfully..";
    }
    else {
        echo "something went wrong!!!";
    }
    header("refresh:3, login.php");
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="fsignup.css">
    <script src="index.js">

    </script>
    </head>
<body >
    <div class="loginbox">
    <img src="clogo.png" class="avatar">
        <h1>Sign up</h1>
        <form onsubmit="return validation()" action="signup.php" method="POST">
            <label for="uname">Username</label>
            <input type="text" name="uname" placeholder="Enter Username" required>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email id" required>
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="Enter Password" required id="pass">
            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" placeholder="Enter Password" required id="cpass">
            
            <br>
            <button type="submit" class="btn" id="btn">Sign up</button><BR>
            <a href="login.php">Have an account?</a>
        </form>
        
    </div>
  
</body>
</html>