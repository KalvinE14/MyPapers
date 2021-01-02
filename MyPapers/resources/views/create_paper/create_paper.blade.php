@extends('../template/basic_template')

@section('title', "Create " . $paper_type)

@section('content')
    <div class="container" style="background-color: #33415c; border-radius: 45px;width: 500px;margin-top: 40px;">
        <div style="text-align: center;margin-bottom: 20px;margin-top: 20px; padding-top: 20px;padding-left: 10px;padding-right: 10px;">
            <h2 style="color: white;">Create {{ $paper_type }} </h2>
        </div>

        <div style="padding-left: 10px;padding-right: 10px;">
            <hr style="background-color: white;">
        </div>
            
        <form action="/paper" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" id="type" value="{{ $paper_type }}">
                <div id="title" style="margin-top: 50px;margin-bottom: 30px;">
                    <input style="width: 300px;border-radius: 15px;margin: auto;" type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Title">
                    <div style="width: 75%;margin: auto;text-align: center;">
                    @error('title')
                        <p style="color: red;">{{ $message }}</p> 
                    @enderror
                    </div>
                </div>

                <div id="requirement" style="margin-bottom: 30px;">
                    <input style="width: 300px;border-radius: 15px;;margin: auto;" type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" placeholder="Requirement">
                    <div style="width: 75%;margin: auto;text-align: center;">
                    @error('requirement')
                        <p style="color: red;">{{ $message }}</p> 
                    @enderror
                    </div>
                </div>
                    
                <div id="description" style="margin-bottom: 30px;">
                    <input style="width: 300px;border-radius: 15px;margin: auto;" type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description">
                    <div style="width: 75%;margin: auto;text-align: center;">
                    @error('description')
                        <p style="color: red;">{{ $message }}</p> 
                    @enderror
                    </div>
                </div>

                <div id="file" style="margin-bottom: 30px;text-align: center;">
                    <input style="width: 240px;color: white;" type="file" name="image" id="actual-btn" onclick="changeLabelText()" hidden>
                    <label id="file_label" for="actual-btn">Choose File</label>
                    <span style="margin-left: 5px;">
                        <label style="color: white;font-size: 13px;font-family: sans-serif;" id="file-name" for="actual-btn">No file choosen</label>
                    </span>
                    
                    <div style="width: 75%;margin: auto;text-align: center;">
                    @error('image')
                        <p style="color: red;">{{ $message }}</p> 
                    @enderror
                    </div>
                </div>

                <div class="form-group" style="width: 50%;margin: auto;text-align: center; margin-bottom: 30px;padding-bottom: 30px;padding-top: 20px;">
                    <button class="btn btn-danger" style="border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 200px;" type="submit" name="insert">Submit and Pay</button>
                </div>
        </form>
    </div>

    
    <style>
        input::placeholder {
            /* text-align: ; */
            padding-left: 10px;
        }
        label#file_label{
            background-color: gray;
            color: white;
            font-family: Poppins;
            border-radius: 15px;
            cursor: pointer;
            width: 110px;
        }
    </style>

    <script type="text/javascript">
        var file = document.getElementById('actual-btn');

        function changeLabelText() {
            var fileValue = file.value;
            var fileNameStartFrom = fileValue.lastIndexOf('\\');
            fileValue = fileValue.substr(fileNameStartFrom + 1);
            if (fileValue !== '') {
                document.getElementById('file-name').innerHTML = fileValue;
            }
        }

        file.addEventListener('change',changeLabelText,false);
    </script>
@endsection