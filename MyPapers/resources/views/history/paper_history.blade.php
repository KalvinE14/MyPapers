@extends('../template/basic_template')

@section('title', "History")

@section('content')

    <div style="text-align: center;margin-bottom: 50px;margin-top: 40px;">
        <h1 style="color: white;">History</h1>
    </div>

    @for($i = 0; $i < 3; $i++)
        <div class="container" style="margin-bottom: 50px;width: 750px; border: 5px solid white; padding: 0px 0px;">
            <div class="container" style="border-bottom: 5px solid white; width: auto;height: 50px;">
                <div class="row" style="height: 50px;">
                    <div class="col-lg3" style="width: auto;margin-top: auto;margin-bottom: auto; margin-left: 26px;">
                        <h4 style="color: white;">Monday, 11 January 2021</h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row" style="padding-top: 40px;padding-bottom: 40px; padding-left: 40px;">
                    <div class="col-lg3" style="background-color: red; width: auto;">
                        <img src="{{ url('assets/previewpaper1.png') }}" alt="result paper" width="200px" height="300px">
                    </div>

                    <div class="col-lg3" style="background-color: blue; width: 430px; margin-left: 10px; margin-top: auto;margin-bottom: auto;margin-right: 10px;">
                        <div id="title" style="height: auto;margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <h4 style="color: white;">CV FOR INTERNSHIP</h4>
                        </div>    
                   
                        <div id="requirement" style="margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <h5 style="color: white;">Requirement</h6>
                            <p style="color: white;font-weight: 100;">Simple Design</p>
                        </div>  
                        
                        <div id="description" style="background-color: red;margin-bottom: 10px;margin-top: 5px;padding-left: 5px;padding-right: 5px;">
                            <h5 style="color: white;">Description</h6>
                            <p style="color: white;font-weight: 100;">Include work experience and skillaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa  aaaaaaaaaaaaaaaaa</p>
                        </div>   

                        <div id="type" style="margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <h5 style="color: white;">Type</h6>
                            <p style="color: white;font-weight: 100;">Curriculum Vitae</p>
                        </div>   

                        <div id="type" style="height: auto;margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <button type="submit" class="btn btn-danger mt-1" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white;margin-bottom: 5px;">Download</button>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="container" style="border-top: 5px solid white; width: auto;height: 50px;margin-top: 0px;">
                <div class="row" style="height: 50px;">
                    <div class="col-lg3" style="width: auto;margin-top: auto;margin-bottom: auto;margin-left: 26px;">
                        <h4 style="color: white;">Created by : Doni</h4>
                    </div>
                </div>
            </div>
        </div>
    @endfor


@endsection