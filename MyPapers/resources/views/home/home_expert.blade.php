@extends('template/basic_template')

@section('content')
    <div class="container mt-5 pt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
    <a href="{{ route('paper_history') }}"><button type="submit" class="btn btn-danger btn-lg ml-5" style="border-radius: 50px">View Order History</button></a>
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container mt-4" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <div class="row">
            <div class="col-md-6">
                <h3>Upcoming Order</h3>
                @foreach($upcomingPapers as $upcomingPaper)
                    <div class="container mt-3 pt-3 pb-1" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 style="display: inline;">{{ $upcomingPaper->title }}</h4>
                                <span class="badge rounded-pill bg-danger" style="margin-left: 6px">{{ $upcomingPaper->type }}</span>
                                <div>
                                    <img style="margin-right: 5px" class="pt-1 mt-2" src="{{ url('assets/' . $upcomingPaper->profile_picture ) }}" alt="" width="50px">
                                    <h5 style="display: inline;">{{ $upcomingPaper->name }}</h5>
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: right">
                                <a href="{{ route('paper_detail', $upcomingPaper->paper_id) }}" class="btn" style="color: white">
                                    <h5 style="margin-top: 50%">See More ></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Available Order</h3>
                @foreach($availablePapers as $availablePaper)
                    <div class="container mt-3 pt-3 pb-3" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 style="display: inline">{{ $availablePaper->title }}</h4>
                                <span class="badge rounded-pill bg-danger" style="margin-left: 6px">{{ $availablePaper->type }}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <hr style="border-top: 1px solid white">
                            <img style="margin-right: 5px" class="pt-1 mt-2" src="{{ url('assets/' . $availablePaper->profile_picture) }}" alt="" width="50px">
                            <h4 style="display: inline; margin-top: 20px">{{ $availablePaper->name }}</h4>
                        </div>
                        <hr style="border-top: 1px solid white">
                        <h5>Requirement</h5>
                        <h6 style="font-weight: 100">{{ $availablePaper->requirement }}</h6>
                        <h5>Description</h5>
                        <h6 style="font-weight: 100">{{ $availablePaper->description }}</h6>
                        <a href="{{ route('accept_order', $availablePaper->paper_id) }}"><button type="submit" class="btn btn-danger ml-5" style="border-radius: 10px; width: 100%; margin-top: 15px;">Accept</button></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
