@extends('template_guest.template_guest')
@section('title', 'Register')
@section('content')
   <div class="container" style="margin-top: 50px; margin-bottom: 30px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
    <div class="container" style="width: 100%; margin-bottom: 30px;">
        <h1 style="color: white;">Register</h1>
    </div> 
    
	<div class="container" style="width: 100%; padding-right: 1000px; margin-bottom: 10px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
		<form action="{{ route('register_user') }}" method="post">
			{{csrf_field()}}
			<div class="row" style="width: auto; height: auto;">
				<div class="col-lg-3" style="width: auto;">
					<div class="form-group" style="margin-bottom: 30px;">
						<label style="margin-bottom: 8px;color: white;" for="name">Name:</label>
						<input style="width: 175px;" type="text" class="form-control" name="name" id="name">
					</div>
				</div>

				<div class="col-lg-3" style="margin-left: 30px; ">
					<div class="form-group" style="margin-bottom: 30px;">
						<label style="margin-bottom: 8px;color: white;" for="username">Username:</label>
						<input style="width: 175px;" type="text" class="form-control" name="username" id="username">
					</div>
				</div>
			</div>

			<div class="row" style="width: auto; height: auto">
				<div class="col-lg-3" style="width: auto;">
					<div class="form-group" style="margin-bottom: 30px;">
						<label style="margin-bottom: 8px;color: white;" for="password">Password:</label>
						<input style="width: 175px;" type="password" class="form-control" name="password" id="password">
					</div>
				</div>

				<div class="col-lg-3" style="margin-left: 30px;">
					<div class="form-group" style="margin-bottom: 30px; width: fit-content;">
						<label style="margin-bottom: 8px;color: white;" for="dob">Date of Birth:</label>
						<input style="width: 175px;" type="date" class="form-control" name="dob" id="dob">
					</div>
				</div>
			</div>

			<div class="form-group" style="margin-bottom: 20px;">
				<label style="margin-bottom: 8px;color: white;" for="address">Address:</label>
				<textarea style="border-radius: 5px;" name="address" id="address" cols="53" rows="2"></textarea>
			</div>

			<div class="form-group" style="margin-bottom: 30px;">
				<label style="margin-bottom: 8px;color: white;" for="gender">Gender:</label>
				<div class="row" style="margin-left: 0px;">
					<div class="col-lg3" style="width: fit-content;margin-left: -12px;">
						<input type="radio" id="male" name="gender" value="Male">
					</div>

					<div class="col-lg3" style="width: auto;margin-right: 50px;margin-left: -15px;">
						<label style="color: white;" for="male">Male</label>
					</div>

					<div class="col-lg3" style="width: auto;">
						<input type="radio" id="female" name="gender" value="Female">
					</div>

					<div class="col-lg3" style="width: auto; margin-left: -15px;">
						<label style="color: white;" for="female">Female</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-danger" style="border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 405px;">Submit</button>
			</div>

			@if($errors->any())
				<p style="color: red;">{{$errors->first()}}</p>
			@endif
		</form>
    </div>
  </div>
@endsection