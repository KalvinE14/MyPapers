@extends('template')

@section('title', 'Create Paper')

@section('content')

    <center>

        <head>
            <link rel="stylesheet" type="text/css" href="{{asset('css/create.css')}}">
            </head>

    <h1>Create Paper</h1>

    <div class="col-7">
        <form action="/paper" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Text Input">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="type">Types :</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="type" id="type" placeholder="Simple, Elegant, etc">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="requirement">Requirement :</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="requirement" id="requirement" placeholder="Text Input">
                    @error('requirement')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="description" id="description" placeholder="Text Input">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group"> 
                <label for="file">File Upload :</label>
                <input type="file" name="image" id="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
                
            <div class="form-group">
                <button type="submit" name="insert">Submit and Pay</button>
            </div>
        </form>
    </div>
    
   
    </div>

@endsection