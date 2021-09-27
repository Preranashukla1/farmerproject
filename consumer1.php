<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['consumer_name'])){
    header("location:consumer.php");
}else{
    echo "username is: " ,$_SESSION['full_name'];

}

?>

<html>
    <a href="go_out.php">Moving Out</a>
    <br/>
    <a href='availfarmer.php'>Seeing Farmer List</a>
</html>
    

