@extends('template')

@section('konten')

<div style = "height: 400px;">
    <center>

    <h2>Login</h2>
    <form action="/login" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="name">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        @if($errors->any())
            <p style="color:red">{{$errors->first()}}</p>
        @endif
    </form>

    </div>
@endsection

