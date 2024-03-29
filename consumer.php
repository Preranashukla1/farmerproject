<?php

session_start();

$connection = mysqli_connect('localhost', 'root', '','project_hcd');

if($_POST){
    $consumer_name = $_POST['consumer_name'];
    $full_name = $_POST['full_name'];
    $q = mysqli_query($connection, 
      "select * from consumer where consumer_name='{$consumer_name}'" );
      
    if($consumer_name == mysqli_query($connection, "select consumer_name from consumer where consumer_name='{$consumer_name}'" )){
          $_SESSION['consumer_name'] = $consumer_name;
          $_SESSION['full_name'] = $full_name;
          header('location:consumer1.php');
      }
      
      else{
    $p = mysqli_query($connection, "insert into consumer( consumer_name,full_name) values('{$consumer_name}','{$full_name}')")  or 
            die(mysqli_error($connection));
    
    if($p){
        echo " <script> alert('Record added');</script>";
          $_SESSION['consumer_name'] = $consumer_name;
          $_SESSION['full_name'] = $full_name;
      
        header("location:consumer1.php");
        }
      }
      

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Customer</title>

    <style>
        *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
    }

    body{
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    .wave{
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        z-index: -1; 
        width: 1600px;
    }

    .container{
        width: 100vw;
        height: 100vh;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap :7rem;
        padding: 0 2rem;
    }

    .img{
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .login-content{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
    }

    .img img{
        width: 500px;
    }

    form{
        width: 360px;
    }

    .login-content img{
        height: 100px;
    }

    .login-content h2{
        margin: 15px 0;
        color: #333;
        text-transform: uppercase;
        font-size: 2.9rem;
    }

    .login-content .input-div{
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
    }

    .login-content .input-div.one{
        margin-top: 0;
    }

    .i{
        color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .i i{
        transition: .3s;
    }

    .input-div > div{
        position: relative;
        height: 45px;
    }

    .input-div > div > h5{
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
    }

    .input-div:before, .input-div:after{
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #38d39f;
        transition: .4s;
    }

    .input-div:before{
        right: 50%;
    }

    .input-div:after{
        left: 50%;
    }

    .input-div.focus:before, .input-div.focus:after{
        width: 50%;
    }

    .input-div.focus > div > h5{
        top: -5px;
        font-size: 15px;
    }

    .input-div.focus > .i > i{
        color: #38d39f;
    }

    .input-div > div > input{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        color: #555;
        font-family: 'poppins', sans-serif;
    }

    .input-div.pass{
        margin-bottom: 4px;
    }

    a{
        display: block;
        text-align: right;
        text-decoration: none;
        color: #999;
        font-size: 0.9rem;
        transition: .3s;
    }

    a:hover{
        color: #38d39f;
    }

    .btn{
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #329dbe, #d34f38, #b0be32);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
    }
    .btn:hover{
        background-position: right;
    }


    @media screen and (max-width: 1050px){
        .container{
            grid-gap: 5rem;
        }
    }

    @media screen and (max-width: 1000px){
        form{
            width: 290px;
        }

        .login-content h2{
            font-size: 2.4rem;
            margin: 8px 0;
        }

        .img img{
            width: 400px;
        }
    }

    @media screen and (max-width: 900px){
        .container{
            grid-template-columns: 1fr;
        }

        .img{
            display: none;
        }

        .wave{
            display: none;
        }

        .login-content{
            justify-content: center;
        }
    }

    .button{
            color: rgb(4, 1, 17);
            padding: 10px 25px;
            background: linear-gradient(rgb(216, 219, 34),rgb(248, 248, 246));
            border: 1px solid #fff;
            border-radius: 20px;
            outline: none;
            cursor: pointer;
            font-weight: bolder;
            font-size: large;
            align-items: center;
            width: fit-content;

        }
        #inner{
    background-color: rgb(182, 198, 250);
    border-radius: 20px;
    opacity: 0.8;
    padding: 20px 20px 20px 20px;
}
    </style>

	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave1.PNG" >
	<div class="container">
		<div class="img">
			<img src="logo.JPG" style="border-radius: 100px;">
		</div>
		<div class="login-content">
                    <form action="consumer.php" id = "inner" method="post">
				<img src="connect.JPG" style="border-radius: 20px;">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="varchar" class="input" placeholder="Username" name = 'consumer_name'>
           		   </div>
           		</div>
                                
                        <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="Your FullName" name = 'full_name'>
           		   </div>
           		</div>
            	<input type="submit" class="btn" value="Go Ahead">
                <br/><br/><br/> 
                <a href="firstpage.php" type="button" class="button"  >Back</a>
            </form>
        </div>
    </div>
</body>
</html>