<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
            body {background-color: grey;}
            body {height: 80px;}
    </style>

</head>
<body>

    <div>
         <img src="{{url('assets/logo.png')}}" style="width:100px;height:100px;" /> 
        <hr>
        
    </div>

    <div>@yield('konten')</div>
    
    <div>
        <hr>
        <center><p style="color: white;">Facebook: KMGMYPAPERS    Twitter: KMGMYPAPERS    Instagram: KMGMYPAPERS</p></center>
    </div>

</body>
</html>