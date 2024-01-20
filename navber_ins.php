<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Static Navbar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body {
    margin: 0;
    padding: 0;
}
* {
  top: 0;
}
  .first_nav {
    background-color: aliceblue;
    margin-top: -23px;
}
a.navbar-brand {
    font-size: 25px;
    font-weight: bold;
    color: #fff;
}
 .collapse .navbar-nav a {
    font-family: sans-serif;
    font-size: 18px;
    margin-left: 22px;
   
}
.navbar-light .navbar-brand {
    color: rgb(0 0 0 / 51%);
}
</style>
</head>
<body>
  <div class="first_nav">
    <div class="container">
    <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="news.php" class="navbar-brand">BD News</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="news.php" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="journalist1.php" class="nav-item nav-link">Journalists</a>
                    <a href="#" class="nav-item nav-link">Contact</a>
                    
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="login.php" class="nav-item nav-link active">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
    </div>
  </div>
</body>
</html>