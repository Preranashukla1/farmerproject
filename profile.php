<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['username'])){
    header("location:login.php");
}else{
    echo "username is: " ,$_SESSION['username'];

}

?>

<html>
    <a href="logout.php">Logout</a>
    <br/>
    <a href='changepassword.php'>Change Password</a>
</html>
    

