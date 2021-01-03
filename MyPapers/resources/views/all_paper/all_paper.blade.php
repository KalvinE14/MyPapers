@extends('template/basic_template')

@section('content')

    <div class="container mt-5 mb-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white; ">
        <h1 style="color: white;">View All Paper</h1>
    </div>

    <div class="container mt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        @foreach($papers as $paper)
            <div class="row mt-4 pt-4 pb-3" style="padding-left: 5px; padding-right: 5px; background: #33415c; border-radius: 20px">
                <div class="col-md-2">
                    @if($paper->preview != null)
                    <img src="{{ url('assets/' . $paper->preview) }}" alt="" width="200px">
                    @else
                    <img src="{{ url('assets/nopreview.png') }}" alt="" width="200px">
                    @endif
                    
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>{{ $paper->title }}</h4>
                        </div>
                        <div class="col-md-6 ml-2" style="text-align: right">
                            <h6>{{ $paper->created_at }}</h6>
                        </div>
                    </div>
                    <hr style="border-top: 1px solid white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Requirement</h5>
                            <h6 style="font-weight: 100">{{ $paper->requirement }}</h6>
                            <h5 class="mt-3">Description</h5>
                            <h6 style="font-weight: 100">{{ $paper->description }}</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="mt-3">Type</h5>
                                    <h6 style="font-weight: 100">{{ $paper->type }}</h6>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mt-3">Status</h5>
                                    <h6 style="font-weight: 100">{{ $paper->status }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="text-align: center">
                            <h5>Owner</h5>
                            <img class="mt-3" src="{{ url('assets/' . $paper->userPicture) }}" alt="" width="180px" height="180px">
                            <h6 class="mt-3" style="font-weight: 100">{{ $paper->userName }}</h6>
                        </div>
                        <div class="col-md-3" style="text-align: center">
                            <h5>Expert</h5>
                            <img class="mt-3" src=" {{ url('assets/' . $paper->expertPicture) }}" alt="" width="180px" height="180px">
                            <h6 class="mt-3" style="font-weight: 100">{{ $paper->expertName }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
