@extends('template_guest.template_guest')
@section('content')
  <div class="container" style="margin-top: 150px; background-color: black">
    <div class="container mt-5" style="float: left; width: 100%">
      <h2 style="font-family: 'Poppins', sans-serif; white-space: nowrap; font-weight: 700; font-size: 48px; color: white">You write it! We make it!</h2>
      <p style="font-family: 'Poppins', sans-serif; font-size: 22px; font-weight: 500; color: white">
        Have a problem in writing a paper? MyPapers <br> can solve your problem. Join us to receive a <br> lot of benefits.
      </p>
    </div> 
  </div>

  <div class="container" style="margin-top: 390px;">
    <div class="container">
      <button type="submit" class="btn btn-danger" style="border-radius: 50px; padding: 0.5em 3em; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white">Register</button>
      <a href="{{ route('login_menu') }}"><button type="button" class="btn btn-danger" style="background-color: transparent; margin-left: 24px; border: solid #d9534f; border-radius: 50px; padding: 0.5em 4em; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white">Login</button></a>
    </div>
  </div>
@endsection