<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <link rel="icon" href="image/reg.png" type="image/gif/png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .reg {
            margin-top: 100px;
        }
        .reg1 {
            border: 0px solid black;
            padding: 40px;
            text-align: center;
            background-color: beige;
            box-shadow: 5px 2px 6px 5px bisque;
        }
        h1 {
            font-size: 41px;
            font-weight: bold;
            padding-bottom: 30px;

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
    <div class="reg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="reg1">
                    <form action=""  method="post">
                        <h1>Register Now</h1>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Name" required><br>
                        <input type="mail" name="mail" class="form-control" placeholder="Enter your Mail" required><br>
                        <input type="password" name="pass" class="form-control" placeholder="Enter your Password" required><br>
                        <input type="password" name="cpass" class="form-control" placeholder="Conform your Password" required><br>
                        <input type="submit" name="submit" class="btn btn-outline-success" value="Submit"><br>
                        <p>Already have an account! <a href="login.php">Login Now.</a></p>
                    </form>

                    <?php
                        include 'db.php';
                        if (isset($_POST['submit'])) {
                            $name=$_POST['name'];
                            $mail=$_POST['mail'];
                            $pass=$_POST['pass'];
                            $cpass=$_POST['cpass'];
                            if($pass==$cpass){
                                $sql = "SELECT * FROM admin WHERE mail='$mail'";
                                $query=mysqli_query($conn,$sql);
                                
                                if(mysqli_num_rows($query)>0){
                                echo '<script type="text/javascript">alert("Email Id Already Existd...Try another Emaid Id!")</script>';

                                }
                                else{

                                $sql="INSERT INTO admin(name,mail,pass,cpass) VALUES('$name','$mail','$pass','$cpass')";
                                $query=mysqli_query($conn,$sql);

                                if($query){
                                echo '<script type="text/javascript">alert("Your successfully sign up")</script>';

                                }
                                else {
                                echo '<script type="text/javascript">alert("Registation Failed ")</script>';

                                }
                              }
                            }
                                else{
                                echo '<script type="text/javascript">alert("Password and Conform Password does not match")</script>';
                            }                         
                        }                   
                    ?>


                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
</html>