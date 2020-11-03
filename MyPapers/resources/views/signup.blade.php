<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>

    <form action="/signup" method="POST">
        {{csrf_field()}}
        <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group col-md-4">
            <label for="name">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group col-md-4">
            <label for="name">Date Of Birth:</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group col-md-4">
            <label for="name">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">male
            <input type="radio"id="female" name="gender" value="female">female
        </div>
        <div class="form-group col-md-4">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group col-md-4">
            <label for="name">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group col-md-4">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        @if($errors->any())
            <p style="color:red">{{$errors->first()}}</p>
        @endif

    </form>
</body>
</html>
