<?php
                   session_start();

                    include('./db.php');  
                   if(isset($_POST['submit'])){
    
                        $mail=$_POST['mail'];
                        $pass=$_POST['pass'];
                        
                        $sql="select * FROM admin WHERE mail='$mail'AND Pass='$pass' limit 1";
                        
                        $result=mysqli_query($conn,$sql);
                        
                        if(mysqli_num_rows($result)==1){
                            echo " You Have Successfully Logged in";
                            header('location:insert.php');
                            exit();
                        }
                        else{
                            echo '<script type="text/javascript">alert("Password incorrect!")</script>';
                        }
                    } 
                    
                    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="image/login.png" type="image/gif/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .log {
            margin-top: 60px;
        }
        .reg1 {
            border: 0px solid black;
            padding: 40px;
            text-align: center;
            background-color: beige;
            box-shadow: 5px 2px 6px 5px bisque;
        }
        img {
            width: 32%;
            border-radius: 50%;
            margin: 10px 0 25px;
        }
        h1 {
            font-size: 41px;
            font-weight: bold;

        }
        p {
            margin-top: 15px;
        }
        input.btn.btn-outline-success {
        width: 110px;
        }
    </style>
</head>
<body>
    <?php include 'navber.php' ?>
    <div class="log">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-4 reg1">
                   <form action="" method="POST">
                    <h1>Login Now</h1>
                    <img src="image/login.png" class="img-fluid" alt="">
                    <input type="mail" name="mail" placeholder="Enter your Mail" class="form-control" required><br><br>
                    <input type="password" name="pass" placeholder="Enter your Password" class="form-control"required ><br><br>
                    <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
                    <p>Create an account! <a href="registation.php">Registation now</a></p>
                    
                   </form>


                </div>
            </div>
        </div>
    </div>


    
</body>
</html>