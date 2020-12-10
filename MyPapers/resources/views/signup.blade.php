@extends('template')

@section('title', 'Login and Register')

@section('content')

<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}"> -->


<div class="row">
	<div class="container-fluid" style="background-color: red; width: 500px;">
		<h1>Register</h1>
		<form action="/signup" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" name="name" id="name">
			</div>

			<div class="form-group">
				<label for="name">Username:</label>
				<input type="text" class="form-control" name="username" id="username">
			</div>

			<div class="form-group">
				<label for="name">Password:</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>

			<div class="form-group">
				<label for="name">Address:</label>
				<input type="text" class="form-control" name="address" id="address">
			</div>

			<div class="form-group">
				<label for="name">Date of Birth:</label>
				<input type="text" class="form-control" name="dob" id="dob">
			</div>

			<div class="form-group">
				<label for="name">Gender:</label>
				<input type="text" class="form-control" name="gender" id="gender">
			</div>

			<div class="form-group">
				<button style="cursor:pointer;" type="submit" class="btn btn-primary">Submit</button>
			</div>

			@if($errors->any())
				<p style="color: yellow;">{{$errors->first()}}</p>
			@endif
		</form>
	</div>

	<div class="container-fluid" style="background-color: red; width: 500px;">
		<h1>Login</h1>
		<form action="/login" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Username:</label>
				<input type="text" class="form-control" name="username" id="username">
			</div>

			<div class="form-group">
				<label for="name">Password:</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>

			<div class="form-group">
				<button style="cursor:pointer;" type="submit" class="btn btn-primary">Submit</button>
			</div>

			@if($errors->any())
				<p style="color: yellow;">{{$errors->first()}}</p>
			@endif
		</form>
	</div>
</div>

<!-- <h2>Registration</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div> -->

@endsection
