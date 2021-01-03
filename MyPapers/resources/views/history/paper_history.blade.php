@extends('../template/basic_template')

@section('title', "History")

@section('content')

    <div style="text-align: center;margin-bottom: 50px;margin-top: 40px;">
        <h1 style="color: white;">History</h1>
    </div>

    @foreach($papers as $paper)
        <div class="container" style="border-radius: 45px; margin-bottom: 50px;width: 750px; padding: 0px 0px; background-color: #33415c">
            <div class="container" style="width: auto;height: 50px;">
                <div class="row" style="height: 50px;">
                    <div class="col-lg3" style="margin-top: 20px;margin-bottom: auto; margin-left: 26px;">
                        <h4 style="color: white;">{{ $paper->updated_at }}</h4>
                    </div>
                </div>
            </div>

            <div class="container" style="padding-left: 26px; padding-right: 26px;">
                <hr style="background-color: white;">
            </div>

            <div class="container">
                <div class="row" style="padding-top: 10px;padding-bottom: 10px; padding-left: 40px;">
                    <div class="col-lg3" style="width: auto;">
                        <img src="{{ url('assets/' . $paper->preview) }}" alt="result paper" width="200px" height="300px">
                    </div>

                    <div class="col-lg3" style="width: 430px; margin-left: 10px; margin-top: auto;margin-bottom: auto;margin-right: 10px;">
                        <div id="title" style="height: auto;margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;word-wrap: break-word;">
                            <h4 style="color: white;">{{ $paper->title }}</h4>
                        </div>    
                   
                        <div id="requirement" style="margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;word-wrap: break-word;">
                            <h5 style="color: white;">Requirement</h6>
                            <p style="color: white;font-weight: 100;">{{ $paper->requirement }}</p>
                        </div>  
                        
                        <div id="description" style="margin-bottom: 10px;margin-top: 5px;padding-left: 5px;padding-right: 5px;word-wrap: break-word;">
                            <h5 style="color: white;">Description</h6>
                            <p style="color: white;font-weight: 100;">{{ $paper->description }}</p>
                        </div>   

                        <div id="type" style="margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <h5 style="color: white;">Type</h6>
                            <p style="color: white;font-weight: 100;">{{ $paper->type }}</p>
                        </div>   

                        <div id="type" style="margin-bottom: 10px;margin-top: 5px; padding-left: 5px;padding-right: 5px;">
                            <a href="{{ route('download_paper', $paper->preview) }}"><button type="submit" class="btn btn-danger mt-1" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white;margin-bottom: 5px;">Download</button></a>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="container" style="padding-left: 26px; padding-right: 26px;">
                <hr style="background-color: white;">
            </div>

            <div class="container" style="width: auto;height: 50px;margin-top: 0px;">
                <div class="row" style="height: 50px; padding-bottom: 10px;">
                    <div class="col-lg3" style="width: auto;margin-top: auto;margin-bottom: auto;margin-left: 26px;">
                        @if(strcmp(Session::get('role'), 'User') == 0)
                        <h4 style="color: white;">Created by : {{ $paper->name }}</h4>
                        @else
                        <h4 style="color: white;">Requested by : {{ $paper->name }}</h4>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach


@endsection