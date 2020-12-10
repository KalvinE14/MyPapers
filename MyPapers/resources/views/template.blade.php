<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

<div class="container-fluid min-vh-100" style="background-color: #f2ede9;padding-bottom: 40px;">
        <div id="header">
            <div class="row" style="background-color: blue;">
                <a href="{{ route('papers') }}" style="text-decoration: none;color:white">
                    <div class="row ml-4 align-self-center" style="padding-left: 85px;padding-right: 85px;">
                        <div class="col-xs-6">
                            <img src="{{url('assets/logo.png')}}" style="width:100px;height:100px;" /> 
                        </div>
                        <div class="col-xs-6" style="margin-top: 5px;margin-left: 10px;">
                            <h1 id="logo_name">MyPapers</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="body container pt-3 pb-10" style="background-color: white; margin-top: 40px;">
            @yield('content')
        </div>

        <div id="footer" style="background-color: blue; height: 100px;padding-top: 20px;padding-left: 40px;">
            <div class="row ml-4" style="padding-left: 85px;padding-right: 85px;">
                <div class="row ml-4" style="padding-left: 85px;padding-right: 85px;">
                    <div class="col-xs-6">
                        <img src="{{ url('assets/facebook_logos_PNG19751.png') }}" style="width:50px;height:50px;" />
                    </div>
                    <div class="col-xs-6" style="margin-top: 5px;margin-left: 10px;">
                        <p id="facebook">KMGMYPAPERS</p>
                    </div>
                </div>
                <div class="row ml-4" style="padding-left: 85px;padding-right: 85px;">
                    <div class="col-xs-6">
                        <img src="{{ url('assets/instagram.png') }}" style="width:50px;height:50px;" />
                    </div>
                    <div class="col-xs-6" style="margin-top: 5px;margin-left: 10px;">
                        <p id="instagram">KMGMYPAPERS</p>
                    </div>
                </div>
                <div class="row ml-4" style="padding-left: 85px;padding-right: 85px;">
                    <div class="col-xs-6">
                        <img src="{{ url('assets/twitter.png') }}" style="width:50px;height:50px;" />
                    </div>
                    <div class="col-xs-6" style="margin-top: 5px;margin-left: 10px;">
                        <p id="twitter">KMGMYPAPERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div>
         <img src="{{url('assets/logo.png')}}" style="width:100px;height:100px;" /> 
        <hr>
        
    </div>

    <div>@yield('konten')</div>
    
    <div>
        <hr>
        <center><p style="color: white;">Facebook: KMGMYPAPERS    Twitter: KMGMYPAPERS    Instagram: KMGMYPAPERS</p></center>
    </div> -->
    

</body>
</html>