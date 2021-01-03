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

    <style>
        .icon {
            cursor: pointer;
            margin-right: 50px;
            line-height: 60px
        }

        .icon span {
            background: #f00;
            padding: 7px;
            border-radius: 50%;
            color: #fff;
            vertical-align: top;
            margin-left: -25px
        }

        .icon img {
            display: inline-block;
            width: 26px;
            margin-top: 4px
        }

        .icon:hover {
            opacity: .7
        }

        .logo {
            flex: 1;
            margin-left: 50px;
            color: #eee;
            font-size: 20px;
            font-family: monospace
        }

        .notifications {
            width: 300px;
            height: 400px;
            position: absolute;
            top: 100px;
            visibility: hidden;
            right: 62px;
            border-radius: 10px 10px 10px 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .notifications h2 {
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #999
        }

        .notifications h2 span {
            color: #f00
        }

        .notifications-item {
            display: flex;
            border-bottom: 1px solid #eee;
            padding: 6px 9px;
            margin-bottom: 0px;
            cursor: pointer
        }

        .notifications-item:hover {
            background-color: #eee
        }

        .notifications-item img {
            display: block;
            width: 50px;
            height: 50px;
            margin-right: 9px;
            border-radius: 50%;
            margin-top: 2px
        }

        .notifications-item .text h4 {
            color: #777;
            font-size: 16px;
            margin-top: 3px
        }

        .notifications-item .text p {
            color: #aaa;
            font-size: 12px
        }

    </style>

    <title>@yield('title')</title>

</head>

<body style="background-color: #293241">

    <script type="text/javascript">
        var down = false;

        function notification() {
            var color = $(this).text();
            if (down) {
                hideNotification();
                down = false;
            } else {
                showNotification();
                down = true;
            }
        }

        function hideNotification() {
            $('#box').css('visibility', 'hidden');
        }

        function showNotification() {
            $('#box').css('visibility', 'visible');
        }

        function updateName() {
            $('#updateName').css('display', 'block');
        }

        function updateAddress() {
            $('#updateAddress').css('display', 'block');
        }

        function updatePassword() {
            $('#changePass').css('display', 'block');
        }

        function updateProfilePicture() {
            $('#changeProfilePicture').css('display', 'block');
        }

        function hireEmployee() {
            $('#hireEmployee').css('display', 'block');
        }

    </script>

    <div class="container-md mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#" style="margin-left: -20px">
                    <img src="/assets/Logo.png" alt="" class="d-inline-block align-center" style="width: 100px; height: 100px">
                    <h3 class="d-inline-block" style="margin-left: -10px; font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px">MyPapers</h3>
                </a>
                <div class="row ml-auto align-self-center">
                    <div class="col">
                        @yield('notification')
                    </div>
                    <div class="col mt-3">
                        <a class="nav-item nav-link" href="#" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px;">Username</a>
                    </div>
                    <div class="col mt-3">
                        <a class="nav-item nav-link" href="#" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 2px;">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <div class="container" style="display: block">
        @yield('content')
    </div>

    <div class="container mb-5" style="margin-top: 160px">
        <div class="container">
            <hr style="border-top: 1px solid white">
        </div>
        <div class="container mt-3" style="text-align: center">
            <a href="#"><img src="/assets/facebook_logos_PNG19751.png" alt="" style="width: 50px; height: 35px"></a>
            <a href="#"><img src="/assets/twitter.png" alt="" style="width: 50px; height: 50px"></a>
            <a href="#"><img src="/assets/instagram.png" alt="" style="width: 40px; height: 40px"></a>
        </div>
        <div class="container mt-2" style="text-align: center">
            <h6 style="font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 1px;">Copyright &copy; 2020 MyPapers. All Rights Reserved</h6>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
</body>

</html>
