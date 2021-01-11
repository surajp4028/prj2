<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'sign.php';
    $a=$_POST['uname'];
    $c=$_POST['pass'];
    $sql = "SELECT * from signup where username='$a' AND password='$c'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num){
        echo " login";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$a;
        $_SESSION['password']=$b;
        header("location: index.html");
    }
    else if(!$num){
        echo " \nwrong password!!";
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="lstyle.css">
    <script src="log.php">

    </script>
    </head>
<body>
    <div class="loginbox">
    <img src="clogo.png" class="avatar">
        <h1>Login Here</h1>
        <form action="login.php" method="POST">
            <label for="uname">Username</label>
            <input type="text" name="uname" placeholder="Enter Username" required id="uname">
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="Enter Password" id="pass" required>
        <button type="submit" class="btn">Login</button>
            <br>
            <br>
            <a href="#">Lost your password?</a><br>
            <a href="signup.php">Don't have an account?</a>
            </form>
    </div>
</body>
</html>