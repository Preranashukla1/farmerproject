<?php 
session_start();
$connection = mysqli_connect("localhost","root", "", "project_hcd");
//Auth
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

if($_POST){
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    //Fetch Old Password From DB
    $q = mysqli_query($connection, "select * from farmer where username ='{$_SESSION['username']}'") or 
    die(mysqli_error($connection));
    $data = mysqli_fetch_array($q);
    if($data['password'] == $opass )
    {
        if($npass==$cpass){
            
            mysqli_query($connection,"update farmer set password='{$npass}' where username='{$_SESSION['username']}' ") or die(mysqli_error($connection));
            echo "<script>alert('Password is Changed ')</script>";
            header('location:login.php');
        }else
        {
            echo "<script>alert('New and Confirm Password Not Matched')</script>";
        }
        
    }else
    {
        echo "<script>alert('Old Password Not Matched')</script>";
    }
}

?>
<html>
    <body>
        <form method="post">
            Old Password : <input type="text" name="opass">
            New Password : <input type="text" name="npass">
            Confirm Password : <input type="text" name="cpass">
            <input type="submit"/>
            <br/>
        </form>
    </body>
</html>