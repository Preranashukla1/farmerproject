<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
        <title>Basic Website</title>

    </head>

    <body>


        <div class="hero">

            <div class="navbar">
                <img src="logo.JPG" class="logo">
                <marquee class="marquee" direction="left" scrollamount="8" >Next Gen Farmers</marquee>
                
            </div>

            <div class="content">
                <small>Hygeneic Is Important</small>
                <h1> The Next Gen Farmers</h1>
                <a type="button" class="button" href="farmer.php"> Farmer</a>
                <a type="button" class="button" href="consumer.php"> Customer</a>
            </div>


            <div class="bubbles">
                <img src="bubble.png">
                <img src="bubble.png">
                <img src="bubble.png">
                <img src="bubble.png">
                <img src="bubble.png">
                <img src="bubble.png">
                <img src="bubble.png">
    
            </div>

        </div>
    </body>

    <style>
        *{
            margin:0;
            padding:0;
            font-family: sans-serif;
        }

        .hero{
            width:100%;
            height: 100vh;
            background-image: url(agri1.JPG );  
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .logo{
            width: 100px;
            cursor: pointer;
            border-radius: 100px;

        }

        .navbar{
            width: 85%;
            height: 15%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
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

        }

        .content{
            font-size: xx-large;
            position: absolute;
            top: 60%;
            left: 8%;
            transform: translateY(-50%);
            z-index: 2;
            color: rgb(240, 240, 243);

        }

        h1{
            font-size: 80px;
            margin: 10px 0 30px;
            line-height: 80px;
        }

        .side-bar{
            width: 50px;
            height: 100vh;
            background: linear-gradient(rgb(175, 63, 59),rgb(243, 241, 240));
            position: absolute;
            right: 0;
            top: 0;

        }

        .menu{
            display: block;
            width: 25px;
            margin: 40px auto 0;
            cursor: pointer;
        }

        .bubbles img{
            width: 50px;
            animation: bubble 7s linear infinite;

        }

        .bubbles{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: absolute;
            top: -80px;
        }

        .marquee{
            font-size: xx-large;
            color: black;
            background: linear-gradient(to bottom right,yellow, green);
            border-radius: 20px;
            width: fit-content;
            height: 'fit-content';
            padding: 2px 2px 2px 2px;
        }

        @keyframes bubble{
            0%{
                transform: translateY(0);
                opacity: 0;
            }

            50%{

                opacity: 0.5;
            }

            70%{
                opacity: 0.5;
            }

            100%{
                transform: translateY(80vh);
                opacity: 0;
            }
        }

        .bubbles img:nth-child(1){
            animation-delay: 2s;
            width: 25px;
        }
        
        .bubbles img:nth-child(2){
            animation-delay: 1s;
        }
        .bubbles img:nth-child(3){
            animation-delay: 3s;
            width: 25px;
        }
        .bubbles img:nth-child(4){
            animation-delay: 4.5s;
        }
        .bubbles img:nth-child(5){
            animation-delay: 3s;
        }
        .bubbles img:nth-child(6){
            width: 20px;
            animation-delay: 6s;
        }
        .bubbles img:nth-child(7){
            width: 35px;
            animation-delay: 7s;
        }
    </style>
</html>