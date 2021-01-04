@extends('template_guest.template_guest')
@section('title', 'Login Menu')
@section('content')
   <div class="container" style="margin-top: 75px">
    <div class="container pt-5" style="width: 100%; margin-bottom: 30px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <h1 style="color: white;">Login</h1>
    </div> 
    
	<div class="container" style="width: 100%; padding-right: 1000px; margin-bottom: 10px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
		@yield('action')
			{{csrf_field()}}
			<div class="form-group" style="margin-bottom: 20px;">
				<label style="margin-bottom: 8px;color: white;" for="username">Username:</label>
				<input type="text" class="form-control" name="username" id="username">
			</div>

			<div class="form-group" style="margin-bottom: 30px;">
				<label style="margin-bottom: 8px;color: white;" for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-danger" style="border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 100px;">Submit</button>
			</div>

			@if($errors->any())
				<p style="color: red;">{{$errors->first()}}</p>
			@endif
		</form>
    </div>
  </div>
@endsection