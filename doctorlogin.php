<?php

$host="localhost";
$user="root";
$password="";
$db="mini";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['register'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from `doctor` where `name`='$uname' && `password`='$password' limit 1";
    
    $result=mysql_query($sql);
    $num=mysql_num_rows($result);
    
    if($num==1){
        
        echo '<script>location.href="Doctor-dashboard.html"</script>';
    }
    else{
        echo '<span class="output" style="color:red;font-size:12px;font-weight:bold; margin-left:470px; position:absolute; margin-top:410px; z-index:646661656116;"> Invalid username or password</span>';
    }
        
}



?>






<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>HM Portal</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        html {
            background-image: url("bg.jpg");
            height: 100vh;
            background-size: cover;
        }

        .container {
            background-color: rgba(52, 73, 94, 0.8);
            position: absolute;
            width: 40%;
            height: 60%;
            padding-top: 15px;
            padding-bottom: -0px;
            left: 19%;
            margin-left: 9%;
            margin-top: 9%;
        }

        .container span {
            margin-left: 30%;
            font-size: 28px;
            font-weight: 450;
            font-family: "Roboto", sans-serif;
            color: darkorange;
        }

        .container .form {
            background-color: rgba(255, 255, 255, 0.9);
            position:relative;
            width: 420px;
            height: 70%;
            padding: 2px 10px;
            padding-top: 22px;
            left: 5%;
            margin-left: 5%;
            margin-top: 2%;

        }

        

        h6 {
            font-family: "Roboto", sans-serif;
            margin-left: 20px;
        }
        
        .container .form{
            padding-top: 40px;
            padding-bottom: 1px;
        }

        .container .form .form-control {
            margin-left: 20px;
            margin-top: 10px;
            margin-bottom: 7px;
            padding-left: 15px;
            padding-right: 180px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
            border: 1px solid grey;
        }

        .container .form .form-control:hover {
            border-color: #3498db;
            border-left-color: darkorange;
            border-left-width: thick;
            transition: .3s;
        }

       input[type="submit"]{
            width: 16%;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-top: 15px;
            margin-left: 318px;
            font-size: 12px;
            color: white;
            outline: none;
            background-color: darkorange;
            border: 1px solid grey;
            border-radius: 6px;
        }

        
        input[type="submit"]:hover {
            color: orange;
            background-color: rgba(52, 73, 94, 0.8);
            transition: .4s;
        }
        h6 a{
            text-decoration: none;
            font-size: 12px;
        }
        
        h6 a:hover{
            color:  #3498db;
        }
        
        a.back{
            text-decoration: none;
            color: darkorange;
            position: absolute;
            margin-top: 5px;
            margin-left: 55px;
            font-family: "Roboto",sans-serif;
            font-size: 12px;
        }
        
        a.back:hover{
            color: #3498db;
        }
       
        
       
    </style>
</head>

<body>
    <div class="container">
        <span>HM&nbsp;|&nbsp;Doctor&nbsp;Login</span>
        <div class="form">
           <form action="#" method="POST">
           <fieldset style="padding-bottom: 35px; margin-top: -20px;">
<legend style="padding: 0px 10px;  text-align: center;font:18px 'Roboto',sans-serif;font-weight: bolder;color: rgba(52, 73, 94,1);">Sign in to your account</legend>
           

            <br><br><br>
            <h6>Please&nbsp;enter&nbsp;your&nbsp;name&nbsp;and&nbsp;password&nbsp;to&nbsp;log&nbsp;in.</h6>

            <input type="text" class="form-control" name="username" placeholder="Username"><br>
            <input type="password" class="form-control" name="password" placeholder="Password">
            
          <input type="submit" value="Login" name="register">
            
              
               </fieldset>
           </form>

        </div>
         <a class="back" href="page1.html"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back-to-Home</a>

        
        </div>
        
        
        

</body></html>
