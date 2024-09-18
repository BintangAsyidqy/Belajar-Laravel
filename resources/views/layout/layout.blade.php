<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }

      .navbar {
        background-color: #007bff !important; /
      }
      .navbar-brand img {
        width: 20%
      }

      .navbar-brand, .nav-link {
        color: #ffffff !important; 
      }

      .navbar-toggler-icon {
        background-color: #ffffff;
      }

      .nav-link:hover {
        background-color: #0056b3 !important; 
        color: #ffffff !important;
        border-radius: 5px;
      }

      .content {
        padding: 40px;
      }

      .custom-section {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .btn-custom {
        background-color: #28a745;
        color: white;
      }

      .btn-custom:hover {
        background-color: #218838;
        color: white;
      }
      img {
        width: 70px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid"> 
        <img src="assets/img/wikrama-logo.png" alt="">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('landing')}}">Landing</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
      <div class="custom-section">
        @yield('content')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
