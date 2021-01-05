@extends('../template/basic_template')

@section('title', 'History')

@section('content')

    <div style="text-align: center;margin-bottom: 50px;margin-top: 40px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <h1 style="color: white;">History</h1>
    </div>

    @if (count($papers) == 0)
        <div class="container mt-5 pt-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="white" class="bi bi-file-earmark-excel-fill mt-5" viewBox="0 0 16 16" style="opacity: 50%">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68L8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
            </svg>
            <h5 class="mt-4" style="opacity: 50%">You Have no Order History</h5>
        </div>
    @else
        @foreach ($papers as $paper)
            <div class="container" style="border-radius: 45px; margin-bottom: 50px;width: 750px; padding: 0px 0px; background-color: #33415c; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
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
                            @if (strcmp(Session::get('role'), 'User') == 0)
                                <h4 style="color: white;">Created by : {{ $paper->name }}</h4>
                            @else
                                <h4 style="color: white;">Requested by : {{ $paper->name }}</h4>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
