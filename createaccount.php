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
            height: 80%;
            padding-top: 15px;
            padding-bottom: ;
            left: 19%;
            margin-left: 9%;
            margin-top: 5%;
        }

        .container span {
            margin-left: 26%;
            font-size: 30px;
            font-weight: 450;
            font-family: "Roboto", sans-serif;
            color: darkorange;
        }

        .container .form {
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            width: 420px;
            height: 75%;
            padding: 30px 10px;
            padding-top: 22px;
            left: 5%;
            margin-left: 5%;
            margin-top: 2%;

        }

        .container .form span {
            color: #34495e;
            font-size: 18px;
            margin-left: 180px;
            font-family: "Roboto", sans-serif;
        }

        h6,
        h5 {
            font-family: "Roboto", sans-serif;
            margin-left: 20px;
        }

        .container .form input[type="radio"] {
            margin-left: 20px;
            margin-top: 8px;
        }

        .container .form input[type="checkbox"] {
            margin-left: 20px;
            margin-top: 15px;
        }

        font {
            font-family: "Roboto", sans-serif;
            font-size: 12px;
        }

        .container .form {
            padding-top: 20px;
            padding-bottom: 25px;
        }

        .container .form .form-control {
            margin-left: 20px;
            margin-top: 10px;
            margin-bottom: -5px;
            padding-left: 15px;
            /*            padding-right: 180px;*/
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
            border: 1px solid grey;
            width: 80%;
        }

        .container .form .form-control:hover {
            border-color: #3498db;
            border-left-color: darkorange;
            border-left-width: thick;
            transition: .3s;
        }

        input[type="submit"] {
            width: 16%;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-top: 2px;
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

        h6 a {
            text-decoration: none;
            font-size: 12px;
        }

        h6 a:hover {
            color: #3498db;
        }

        /*
       .blink{
            animation: blink .7s linear infinite;
            
        }

        @keyframes blink{
            from{
                color: aqua;
                
            }
            
            to{
                color:darkorange;
            }
        }
*/

     
    </style>
</head>

<body>
    <div class="container">
        <span class="blink">Patient&nbsp;Registration</span>
        <div class="form">
            <form action="createaccount.php" method="post">
                <fieldset style="padding-bottom: 17px;margin-top: -15px;">
                    <legend style="padding: 0px 10px; text-align: center;font:20px 'Roboto',sans-serif;font-weight: bolder;color: rgba(52, 73, 94,1);">Sign Up</legend>
                    <br>
                    <h6>Enter&nbsp;your&nbsp;personal&nbsp;details&nbsp;below:</h6>

                    <input type="text" class="form-control" name="name" placeholder="Full Name" required><br>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <input type="text" class="form-control" name="address" placeholder="Address" required>

                    <br><br>
                    <h5>Gender</h5>
                    <input type="radio" name="gender" value="male" checked>&nbsp;<font>Male</font>
                    <input type="radio" name="gender" value="female">&nbsp;<font>Female</font>
                    <br><br>
                    <h6>Enter&nbsp;your&nbsp;personal&nbsp;details&nbsp;below:</h6>

                    <input type="text" class="form-control" name="email" placeholder="Email" required><br>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <input type="tel" class="form-control" name="mobile" maxlength="10" placeholder="Mobile Number" required>
                    <br>
                    <!--           <button onclick="location.href='createaccount.html'">gffgh</button>-->
                    <input type="checkbox" id="chk" required>
                    <label for="chk">
                        <font>&nbsp;I&nbsp;agree</font>
                    </label>
                    
                     <!--    Php starts  -->
                    <?php
                if(isset($_POST['register'])){
$name= $_POST['name'];
 $address= $_POST['address'];
 $user= $_POST['username'];                   
$pass=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

session_start();
$con=mysqli_connect('localhost','root','','mini');
$q="select * from `patient` where `email`='$email' && `username`='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
                    
if($num>=1){
echo '<span class="output" style="color:red;font-size:12px;font-weight:bold;position:relative;left:-50px;top:22px;">Already Registered</span>';
}else{
$qy="insert into `patient`(`name`,`password`,`email`,`mobile`,`gender`,`username`,`address`) values('$name','$pass','$email','$mobile','$gender','$user','$address')";
$run=mysqli_query($con,$qy);
                        
if($run==TRUE){

    echo '<script>location.href="patient-login.php"</script>';
}
 else{
echo "Error";
}
}
                }
?>
                    <input type="submit" value="Submit" style="cursor:pointer;" name="register">


                    <h6>Already&nbsp;have&nbsp;an&nbsp;account&nbsp;?&nbsp;<a href="registration.html">Log-in</a></h6>
                </fieldset>

               


            </form>
        </div>

    </div>


   

</body>

</html>
