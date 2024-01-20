<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    <style media="screen">
        body {
            background-color: #efefef;
        }
        
        .divmain {
            text-align: -webkit-center;
            margin-bottom: 70px;
        }
        .div1 {
            margin-top: 40px;
        }
        .div2 {
            /* width: 650px; */
            text-align: center;
            background-color: white;
            padding: 0px 16px 0.5px;
        }
        
        p {
            font-size: 18px;
            font-weight:bold;
        }
        h5 {
            text-align: justify;
            font-size: 20px;
            font-weight: lighter;
        }

        /* // Extra large devices */
@media(min-width:1200px) {
    .div2 {
            width: 650px;
        }
        img {
            width: 650px;
            height: 300px;    
        }
}

/* // Large devices */
@media(min-width:992px) and (max-width:1199px) {
    .div2 {
            width: 650px;
        }
        img {
            width: 650px;
            height: 300px;    
        }

}

/* // tablet  devices laptop devices */
@media(min-width:768px) and (max-width:991px) {
    .div2 {
            width: 650px;
        }
        img {
            width: 650px;
            height: 300px;    
        }

}

/* // mobile landscape devices landscape phones*/
@media(min-width:576px) and (max-width:767px) {
    .div2 {
            width: 275px;
        }
        img {
            width: 412px;
            height: 300px;    
        }
}

/* // mobile  devices phones*/
@media(min-width:480px) and (max-width:575px) {
    .div2 {
            width: 328px;
        }
        img {
            width: 365px;
            height: 300px;    
        }

}

/* // mobile  devices phones 480px */
@media(min-width:320px) and (max-width:479px) {
    .div2 {
            width: 275px;
        }
        img {
            width: 312px;
            height: 283px;   
        }
}
    </style>
</head>
<body>
    <?php
    //  include 'navber.php';
     include 'db.php';

     $id=$_POST['id'];

     $sql="SELECT * from news where id='$id'";
     $query=mysqli_query($conn,$sql);

     while($info=mysqli_fetch_array($query)) {
        ?>

            <div class="divmain">
            <div class="div1">
                <p><?php echo $info['date']; ?></p>
                <img src="image/<?php echo $info['image'];?>" alt="">
                <div class="div2">
                    <h5><?php echo $info['news'];?></h5>
                </div>
            </div>

            </div>


        <?php
     }
     
     
     ?>
     <?php include 'down.php';?>
    
</body>
</html>