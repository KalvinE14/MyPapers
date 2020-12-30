@extends('../template/basic_template')

@section('title', "Create Paper")

@section('content')
    <!-- <div class="container mb-4 mt-5">
        <div class="container" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 1px;"><h2>@yield('list_title')</h2></div>
    </div>
    
    <div class="container" style="display: flex">
        <div class="container mb-5" style="background: red; width: 73%; float: left; margin-right: 20px">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, minima porro perspiciatis provident eos adipisci laborum dolores, nostrum vitae id, recusandae dolore debitis sed illo. Deleniti labore quis optio fugit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsam beatae, optio voluptatem eaque tempore ratione doloremque nisi quis fugit. Accusantium, sunt molestiae fugit autem nam iusto recusandae? Dicta, cupiditate!
            @yield('list')
        </div>
        <div class="container mb-5" style="background: white; width: 27%; float: right">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus vero asperiores atque vitae repudiandae nulla, mollitia voluptatem velit! Accusantium ea iusto, nihil corporis consequatur molestiae atque hic aut corrupti.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores sequi, amet aperiam officia recusandae at tenetur error nulla a excepturi optio adipisci laboriosam et dolor quo ea assumenda perferendis. Neque.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quo reiciendis sint. Maxime sed vel aspernatur deserunt consequatur perspiciatis aperiam recusandae tempore dolore a adipisci, mollitia amet, autem fuga nesciunt.
            @yield('statistics')
        </div>
    </div> -->

    <div class="container" style="border: 5px solid white;width: 500px;margin-top: 40px;">
        <div style="text-align: center;margin-bottom: 40px;margin-top: 20px;">
            <h1 style="color: white;">Create Paper</h1>
        </div>
            
        <form action="/paper" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" id="type" value="Brochure">
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

                <div class="form-group" style="width: 50%;margin: auto;text-align: center; margin-bottom: 30px;">
                    <button class="btn btn-danger" style="border-radius: 15px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 200px;" type="submit" name="insert">Submit and Pay</button>
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
        var file = document.getElementById('actual-btn'); /* finds the input */

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