

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>


  <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Panel</a>
  <input class="form-control form-control-primary w-100" type="text" placeholder="Search...">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- Container -->

  <div class="container-fluid">
    <div class="row">
      <!-- navbar -->
      <div class="col-md-2 bg-light d-none d-md-block sidebar">
        <div class="left-sidebar">
        <ul class="nav flex-column sidebar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-chevron-right"></i>Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-chevron-right"></i>News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-chevron-right"></i>Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-chevron-right"></i>Delete</a>
          </li>
        </ul>
        </div>

      </div>
      <!-- main -->
      <div class="col-md-9">
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h3>Candidates</h3>
        <hr>
        <div class="table-responsive">
        <table class="table table-ms table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Masud</td>
                <td>Rana</td>
                <td>@Director</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Rohan </td>
                <td>Gazi</td>
                <td>@Assistant Director</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Sumon</td>
                <td>Hossian</td>
                <td>@Editor</td>
              </tr>
            </tbody>
          </table>
        </div>


        <h3>Invoices</h3>
         <hr>
         <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">News #0001</h5>
              <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felisnt.</p>
              <a href="#" class="btn btn-primary">Print</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">News #0002</h5>
              <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
              <a href="#" class="btn btn-primary">Print</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">News #0003</h5>
            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
            <a href="#" class="btn btn-primary">Print</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">News #0004</h5>
            <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
            <a href="#" class="btn btn-primary">Print</a>
          </div>
        </div>
      </div>
    </div>


      </main>
      </div>

    </div>
  </div>


  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  </body>
</html>