<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body style="background-color: #293241">
    <div class="container-md mt-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#" style="margin-left: -20px">
                    <img src="/assets/Logo.png" alt="" class="d-inline-block align-center" style="width: 100px; height: 100px">
                    <h3 class="d-inline-block" style="margin-left: -10px; font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px">MyPapers</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row ml-auto align-self-center">
                    <div class="col">
                        <a class="nav-item nav-link" href="#" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px;">Username</a>
                    </div>
                    <div class="col">
                        <a class="nav-item nav-link" href="#" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px;">Logout</a>
                    </div>
                </div>
            </div>
          </nav>
    </div>


    <div class="container" style="display: block">
        @yield('content')
    </div>
    
    <div class="container">
        <div class="container" style="text-align: center">
            <a href="#"><img src="/assets/facebook_logos_PNG19751.png" alt="" style="width: 50px; height: 35px"></a>
            <a href="#"><img src="/assets/twitter.png" alt="" style="width: 50px; height: 50px"></a>
            <a href="#"><img src="/assets/instagram.png" alt="" style="width: 40px; height: 40px"></a>
        </div>
        <div class="container mt-2" style="text-align: center">
            <h6 style="font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 1px;">Copyright &copy; 2020 MyPapers. All Rights Reserved</h6>
        </div>
    </div>

  </body>
</html>