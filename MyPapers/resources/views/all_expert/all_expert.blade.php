@extends('template/basic_template')

@section('content')

    <div class="container mt-5 mb-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white; ">
        <h1 style="color: white;">View All Expert</h1>
    </div>

    <div class="container mt-5 mb-4" style="margin-left: 25px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <button type="submit" onclick="hireEmployee()" class="btn btn-danger btn-lg" style="border-radius: 50px">Hire New Employee</button>
        <div class="row mt-4" style="margin-left: 1px; display: none" id="hireEmployee">
            <div class="col-6 pt-4 pb-4" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px"">
                <form action="{{ route('register_expert') }}" method="post">    
                    @csrf
                    <input type="text" id="oldPass" name="name" placeholder="Name" class="form-control mb-3">
                    <input type="text" id="newPass" name="username" placeholder="Username" class="form-control mb-3">
                    <input type="text" id="confPass" name="password" placeholder="Password" class="form-control mb-3">
                    <input type="text" id="newPass" name="address" placeholder="Address" class="form-control mb-3">
                    <div class="form-group">
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                                <label class="form-check-label" style="display: inline" for="male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="updatePassword" class="btn btn-danger" style="border-radius: 10px; width: 100%">Confirm</button>
                    @if($errors->any())
                        <p style="color: red;">{{$errors->first()}}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-4" style="padding-left: 30px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        @foreach($experts as $expert)
            <div class="col-lg3" style="border-radius: 20px; margin-bottom: 25px; background-color: #33415c; width: 380px; margin-right: 20px; margin-left: 20px; padding-top: 20px; padding-bottom: 20px;">
                <div id="header">
                    <div class="row">
                        <div class="col-lg3" style="width: fit-content;">
                            <img style="border-radius: 50%;" src="{{ url('assets/' . $expert->profile_picture) }}" alt="" width="105px" height="105px">
                        </div>

                        <div class="col-lg3" style="width: 230px; margin-right: 20px; word-wrap: break-word;margin-top: auto; margin-bottom: auto;">
                            <div>
                                <h5 style="color: white;">{{ $expert->name }}</h5>
                            </div>

                            <div style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <p style="font-weight: 100;">{{ $expert->dob }}</p>
                            </div>

                            <div>
                                <form action="{{ route('remove_expert', $expert->expert_id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" style="height: 30px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; color: white;width: 110px;">Remove</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <hr style="background-color: white;margin-right: 10px;margin-left: 10px;">
                </div>

                <div class="container">
                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Expert ID</h5>
                        <p style="font-weight: 100;color: white;">{{ $expert->expert_id }}</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Username</h5>
                        <p style="font-weight: 100;color: white;">{{ $expert->username }}</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Address</h5>
                        <p style="font-weight: 100;color: white;">{{ $expert->address }}</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Gender</h5>
                        <p style="font-weight: 100;color: white;">{{ $expert->gender }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
