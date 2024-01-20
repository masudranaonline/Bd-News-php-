<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Sharing Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive.css">
    
    <style media="screen">

      body {
        background-color:azure;
      }
      .div1 img {
        /* width: 220px; */
        height: 160px;
        float: left;
        margin-top: 10px;
        margin-left: 10px;
      }
      .div1 {
        border: 2px solid black;
         /* width: 445px;  */
        float: left;
        /* margin-left:11px; */
        padding-bottom: 12px;
        margin-bottom: 3px;
        
      }
      .div2 {
        border: 1px solid white;
        max-height:158px;
        overflow: hidden;
        float: left;
        margin-top: 4px;
        margin-left: 10px;
        padding: 1px;
        font-weight: bold;

      }
      /* .divmain {
        /* margin-left: 80px; 
      } */
      .div3 {
        float: left;
        border: 1px solid white;
        margin-top: 20px;
        margin-right: 200px;
      }
      #label1 {
        font-size: 16px;
        font-weight: bold;
        margin-left: 40px;
      }
      #label2 {
        font-size: 18px;
        font-weight: bold;
        margin-left: 14px;
        line-height: 36px;
      }
      form {
        margin-top: -50px;
        float: right;
      }
      #readfullnews {
        cursor: pointer;
      }
    </style>
</head>
<body>
    <?php include 'navber.php' ?>
    <br>
    <div class="divmain">
      <div class="container">
      <div class="row">
      <?php 
        include 'db.php';
            $sql="SELECT * from news order by id desc";
            $query=mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)) {
                ?>
                      <div class="col-md-4">
                      <div class="div1">
                        <img src="./image/<?php echo $info['image']; ?>" alt="">
                        <div class="div2">
                            <?php echo $info['news']; ?>
                        </div>
                        <div class="div3">
                            <label id="label1"><?php echo formatDate3($info['date']); ?></label><br>
                            <label id="label2"><?php echo formatDate1($info['date']); ?></label>
                            <label id="label3"><?php echo formatDate2($info['date']); ?></label>
                        </div>
                        <form action="fullnews.php" method="post">
                            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
                            
                            <input id="readfullnews" type="submit" value="Read Full News">
                        </form>
                    </div>
                      </div>
                    
                <?php
            } 
        ?>
      </div>
      </div>

    </div>


    <?php include 'journalist.php' ?>
     <?php include 'down.php';?> 
    
</body>
</html>