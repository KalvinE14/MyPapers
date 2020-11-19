<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Create Paper</title>
</head>
<body>
    <h1>Create Paper</h1>

    <div class="col-7">
        <form action="/paper" method="post" enctype="multipart/form-data">
            @csrf
            <!-- <input type="hidden" name="userid" value="Input::get('userid')"> -->
            <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Text Input">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="type" id="type" placeholder="Simple, Elegant, etc">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="requirement">Requirement :</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="requirement" id="requirement" placeholder="Text Input">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="description" id="description" placeholder="Text Input">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group"> 
                <label for="file">File Upload :</label>
                <input type="file" name="image" id="image">
                  
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
                
            <div class="form-group">
                <button type="submit" name="insert">Submit and Pay</button>
            </div>
        </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</body>
</html>