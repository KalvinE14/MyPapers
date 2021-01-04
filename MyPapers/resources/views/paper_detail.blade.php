@extends('template/basic_template')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-2">
                @if($paper->preview == null)
                <img src="{{url('assets/nopreview.png')}}" alt="" width="200px">
                @else
                <img src="{{url('assets/' . $paper->preview)}}" alt="" width="200px">
                @endif
            </div>
            <div class="col-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                <h2>{{ $paper->title }}</h2>
                <h5>Requirement</h5>
                <h6 class="mb-3" style="font-weight: 100">{{ $paper->requirement }}</h6>
                <h5>Description</h5>
                <h6 class="mb-3" style="font-weight: 100">{{ $paper->description }}</h6>            
                <h5>Type</h5>
                <h6 class="mb-3" style="font-weight: 100">{{ $paper->type }}</h6>
            </div>
            <div class="col-5 mt-5" style="display: inline; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                <h5>Additional File</h5>
                <div class="input-group mb-5">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <h5>Download Paper</h5>
                <div class="row mb-5">
                    <div class="col-6 mt-1">
                        @if($paper->preview == null)
                        <span><h6 class="mb-4 mt-2" style="font-weight: 100; width: auto;">Paper is not ready</h6></span>
                        @else
                        <span><h6 class="mb-4 mt-2" style="font-weight: 100; width: 40%;">{{ $paper->preview }}</h6></span>
                        @endif
                    </div>
                    <div class="col-6">
                        @if($paper->preview != null)
                        <span><button type="submit" class="btn btn-danger mt-1" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white;">Download</button></span>
                        @endif
                    </div>
                </div>
                @if($paper->preview != null)
                <button type="button" class="btn btn-success" style="width: 100%; border-radius: 50px">Finish</button>
                @endif
                
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <h3>Comments - {{ $totalComment }}</h3>
    </div>
    <div class="container mb-5">
        @foreach($comments as $comment)
            @if(strcmp(Session::get('role'), "User") == 0)
            @if($comment->expert_comment)
            <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #2a9d8f; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                <div class="row">
                    <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <img class="ml-5" src="{{url('assets/' . $comment->expertPicture)}}" alt="" width="150px">
                        {{ $comment->expertName }}
                    </div>
                    <div class="col-10 mt-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        {{ $comment->comment }}
                        <br><br>
                        {{ $comment->created_at }}
                    </div>
                </div>
            </div>
            @else
            <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #81b29a; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                <div class="row">
                    <div class="col-10 mt-3" style="text-align: right; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        {{ $comment->comment }}
                        <br><br>
                        {{ $comment->created_at }}
                    </div>
                    <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <img class="ml-5" src="{{url('assets/' . $comment->userPicture)}}" alt="" width="150px">
                        {{ $comment->userName }}
                    </div>
                </div>
            </div>
            @endif
            @else
            @if($comment->user_comment)
            <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #2a9d8f; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                <div class="row">
                    <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <img class="ml-5" src="{{url('assets/' . $comment->userPicture)}}" alt="" width="150px">
                        {{ $comment->userName }}
                    </div>
                    <div class="col-10 mt-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        {{ $comment->comment }}
                        <br><br>
                        {{ $comment->created_at }}
                    </div>
                </div>
            </div>
            @else
            <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #81b29a; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                <div class="row">
                    <div class="col-10 mt-3" style="text-align: right; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        {{ $comment->comment }}
                        <br><br>
                        {{ $comment->created_at }}
                    </div>
                    <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                        <img class="ml-5" src="{{url('assets/' . $comment->expertPicture)}}" alt="" width="150px">
                        {{ $comment->expertName }}
                    </div>
                </div>
            </div>
            @endif
            @endif
        @endforeach
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                @if(strcmp(Session::get('role'), "User") == 0)
                <img class="ml-5" src="{{url('assets/' . $user->profile_picture)}}" alt="" width="150px"  style="round-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">
                <h6 class="mt-2">{{ $user->name }}</h6>
                @else
                <img class="ml-5" src="{{url('assets/' . $expert->profile_picture)}}" alt="" width="150px"  style="round-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">
                <h6 class="mt-2">{{ $expert->name }}</h6>
                @endif
            </div>
            <div class="col-10">
                <div class="mb-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                    @if(strcmp(Session::get('role'), "User") == 0)
                    <h5 class="mb-3">Reply to Expert</h5>
                    @else
                    <h6 class="mt-2">Reply to User</h6>
                    @endif
                    <form action="{{ route('create_comment', request()->route('paper_id')) }}" method="post">
                        @csrf
                        <input name="expert_comment" type="hidden" value="false">
                        <input name="user_comment" type="hidden" value="true">
                        <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                        <div style="text-align: right">
                            <button type="submit" class="btn btn-danger mt-3" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white">Reply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection