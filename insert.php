<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert News</title>
    <style media="screen">
        textarea {
            width: 500px;
            height: 300px;
            font-size: 20px;
        }
        .ins1 {
            text-align: -webkit-center;
            margin-top: -24px;
            padding-top: 84px;
            padding-bottom: 96px;
        }
        .ins2{
            border: 5px solid black;
            width: 558px;
            padding: 20px;
        }
        input[type=file] {
            font-size: 20px;
            margin-right: 25%;
        }
        input[type=submit]{
            font-size:20px;
            font-weight:bold;
        }
        .ins1 {
            background-color: bisque;
        }
    </style>
</head>
<body>
   <?php include 'navber_ins.php' ?> 
    
    <div class="ins1">
    <div class="ins2">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <textarea name="news" id="" cols="30" rows="10" placeholder="Enter News" required></textarea><br><br>
            <input type="file" name="image" id="" required><br><br>
            <input type="submit" name="submit" value="Submit">

        </form>
        <?php
        include 'db.php';
        
        if (isset($_POST['submit'])) {
            $news=$_POST['news'];
            $image=$_FILES['image']['name'];
            $image_type=$_FILES['image']['type'];
            $image_size=$_FILES['image']['size'];
            $image_tem_loc=$_FILES['image']['tmp_name'];
            $image_store="image/".$image;

            move_uploaded_file($image_tem_loc,$image_store);

            $sql="INSERT INTO news(news,image) values('$news','$image')";
            $query=mysqli_query($conn,$sql);
            if($query){
                echo '<script type="text/javascript">alert("Successfully Insert")</script>';

                }
                else {
                echo '<script type="text/javascript">alert("Insert Failed ")</script>';

                }
        }      
        ?>
    </div>
    </div>
    
</body>
</html>