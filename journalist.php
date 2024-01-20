<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Journalist</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<style>
  body {
    margin: 0;
    padding: 0;
}
* {
  top: 0;
}

.item {
    /* border: 1px solid black; */
    border: 3mm ridge rgba(211, 220, 50, .6);
    padding: 8px 9px 25px;
    background-color: #f8f9fa;
}
/* .item:hover {
    border: 4mm ridge rgba(211, 220, 50, .6);
} */
.owl_image {
    height: 200px;
}
h4 {
    font-size: 25px;
    text-align: center;
    font-family: sans-serif;
}
p {
    text-align: center;
    font-size: 15px;
    font-family: sans-serif;
}
.top {
    text-align: center;
    border-top: 1px solid #e9d8f3ba;
    padding-top: 20px;
}
h1 {
    font-size: 32px;
    text-align: center;
    font-family: sans-serif;
    font-weight: bold;
    vertical-align: text-top;
    color: #485430a1;
}
</style>
</head>
<body>



    <div class="top">
        <h1>Our Journalist Point</h1><br>
    

  <!-- owl-carousel -->
    <div class="carasal_section">
        <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="owl_image" src="image/jur1.jfif" alt=""><br>
                <h4>Anisul Hoqur</h4>
                <p>Director</p>
            </div>
            <div class="item">
                <img class="owl_image" src="image/jur2.jpg" alt=""><br>
                <h4>Matiur Rahman</h4>
                <p>Editor,BD News</p>
            </div>
            <div class="item">
                <img class="owl_image" src="image/jur3.jpg" alt=""><br>
                <h4>Tapos Jubaer </h4>
                <p>Journalist</p>
            </div>
            <div class="item">
                <img class="owl_image" src="image/jur4.jpg" alt=""><br>
                <h4>Fahim Rahman</h4>
                <p>Sports Journalist</p>
            </div>
            <div class="item">
                <img class="owl_image" src="image/jur5.jfif" alt=""><br>
                <h4>Samia Zaman </h4>
                <p>Senior Journalist</p>
            </div>
            <div class="item">
                <img class="owl_image" src="image/125742samu.jpg" alt=""><br>
                <h4>Masud Rana</h4>
                <p>Director</p>
            </div>
            
            
        </div>
        </div>
    </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
</body>
</html>