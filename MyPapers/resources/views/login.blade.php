@extends('template')

@section('konten')

<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>

<head>
    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <div class="container">
      <section id="content">
        <form action="">
          <h1>Login</h1>
          <div>
            <input type="text" placeholder="Username" required="" id="username" />
          </div>
          <div>
            <input type="password" placeholder="Password" required="" id="password" />
          </div>
          <div>
            <input type="submit" value="Log in" />
            <a href="#">Register</a>
          </div>
        </form><!-- form -->
        
      </section><!-- content -->
    </div><!-- container -->
    </body>
    </html>
  
@endsection

