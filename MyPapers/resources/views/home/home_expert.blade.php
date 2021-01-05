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
                @if (count($upcomingPapers) == 0)
                    <div class="container mt-5 pt-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="white" class="bi bi-file-earmark-excel-fill mt-5" viewBox="0 0 16 16" style="opacity: 50%">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68L8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
                        </svg>
                        <h5 class="mt-4" style="opacity: 50%">No Orders Yet</h5>
                    </div>
                @else
                    @foreach ($upcomingPapers as $upcomingPaper)
                        <div class="container mt-3 pt-3 pb-3" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 style="display: inline;">{{ $upcomingPaper->title }}</h4>
                                    <span class="badge rounded-pill bg-danger" style="margin-left: 6px">{{ $upcomingPaper->type }}</span>
                                    <div>
                                        <img style="margin-right: 5px" class="pt-1 mt-2" src="{{ url('assets/' . $upcomingPaper->profile_picture) }}" alt="" width="50px">
                                        <h5 style="display: inline;">{{ $upcomingPaper->name }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-4" style="text-align: right">
                                    <a href="{{ route('paper_detail', $upcomingPaper->paper_id) }}" class="btn" style="color: white">
                                        <h5 style="margin-top: 65%">See More ></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-6">
                <h3>Available Order</h3>
                @if (count($availablePapers) == 0)
                    <div class="container mt-5 pt-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="white" class="bi bi-file-earmark-excel-fill mt-5" viewBox="0 0 16 16" style="opacity: 50%">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68L8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
                        </svg>
                        <h5 class="mt-4" style="opacity: 50%">No Available Orders Yet</h5>
                    </div>
                @else
                    @foreach ($availablePapers as $availablePaper)
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
                @endif
            </div>
        </div>
    </div>
@endsection
