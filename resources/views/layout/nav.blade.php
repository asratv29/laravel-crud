<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark d-flex justify-content-between dark">
        <div class="container">
          <div class="logo">
            <a class="nav-link text-light" href="/" class="btn btn-dark mt-2">Back To Home</a>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('product.history') }}">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="signin.php">Novel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Fiction</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Non-fiction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Biography</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Mystery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Self-help-books</a>
              </li>


          </ul>
         </div>
        </nav>


            @yield('content')


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
