@extends('template_guest.template_guest')
@section('title', 'Login Menu')
@section('content')
   <div class="container" style="margin-top: 150px">
    <div class="container mt-5" style="width: 100%;">
        <a href="{{ route('login_user') }}"><button type="button" class="btn btn-danger" style="border-radius: 50px; margin-left: 50px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 300px;">Login as User</button></a>
    </div> 
    
    <div class="container mt-5" style="width: 100%;">
        <a href="{{ route('login_expert') }}"><button type="button" class="btn btn-danger" style="margin-left: 50px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 300px;">Login as Expert</button></a>
    </div>
    
    <div class="container mt-5" style="width: 100%;">
        <a href="{{ route('login_admin') }}"><button type="button" class="btn btn-danger" style="background-color: transparent; border-radius: 50px; margin-left: 50px; border: solid #d9534f; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 300px;">Login as Admin</button></a>
    </div> 
  </div>
@endsection