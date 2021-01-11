<?php
$servername="localhost:3307";
$username="root";
$password="";
$database="project";

$conn = mysqli_connect($servername , $username , $password, $database);

if(!$conn){
die("sorry we failed to connect : ".mysqli_connect_error());
}
else {
    echo "connection : ok";
}
// $a=$_POST['uname'];
// $b=$_POST['email'];
// $c=$_POST['pass'];
// $d=$_POST['cpass'];
// $sql = "INSERT INtO signup (username, email, password, cpassword) VALUES ('$a','$b','$c','$d')";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo " Account created successfully..";
// }
// else {
//     echo "something went wrong!!!";
// }
// header("refresh:3, session.php");
?>