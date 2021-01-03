@extends('template/basic_template')
@section('title', 'View Profile')
@section('content')
    <div class="container mt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">

        <h1>View Profile</h1>

        @if(strcmp(Session::get('role'), 'User') == 0)
        @foreach($user as $u)
        <div class="row mt-4">
            <div class="col-md-2">
                <img src="{{ url('assets/' . $u->profile_picture) }}" alt="" width="190px" style="position: absolute">
                <a href="#" onclick="updateProfilePicture()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="position: relative; margin-top: 145px; margin-left: 140px; border: 2px #33415c solid; border-radius: 100px">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                </a>
            </div>

            <div class="col-md-6 mt-5">
                <h3>{{ $u->name }}</h3>
                <h6 style="font-weight: 300">Customer</h6>
                <div>
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z" />
                                <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                            </svg>
                        </div>
                        <div class="col" style="margin-left: -27px">
                            <h6 style="font-weight: 300; display: inline">{{ $u->dob }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4" id="changeProfilePicture" style="display: none; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
            <div class="col-8 mt-2 pt-3 pb-3" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                <h5>New Profile Picture</h5>
                <input class=" form-control" type="file" id="profilePicture">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container mt-4 pt-4 pb-4" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white; background: #33415c; border-radius: 25px">
                        <h4 class="ml-5">Profile Detail</h4>
                        <hr style="border-top: 1px solid white">
                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Fullname </h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $u->name }}</h6>
                                <div id="updateName" style="display: none">
                                    <hr style="border-top: 1px solid white">
                                    <form action="{{ route('update_user_name',  $u->user_id) }}" method="post">
                                        @csrf
                                        <input type="text" name="name" class="form-control" placeholder="New Name">
                                        <button type="submit" class="btn btn-danger mt-3">Confirm</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" id="changeName" onclick="updateName()" class="btn btn-danger">Change</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Address</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $u->address }}</h6>
                                <div id="updateAddress" style="display: none">
                                    <hr style="border-top: 1px solid white">
                                    <form action="{{ route('update_user_address',  $u->user_id) }}" method="post">
                                        @csrf
                                        <input type="text" name="address" class="form-control" placeholder="New Address">
                                        <button type="submit" class="btn btn-danger mt-3">Confirm</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="button" id="changeAddress" onclick="updateAddress()" class="btn btn-danger">Change</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Username</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $u->username }}</h6>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Date of Birth</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $u->dob }}</h6>
                            </div>
                        </div>
                        <hr style="border-top: 1px solid white">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="changePassword" onclick="updatePassword()" class="btn btn-danger">Change Password</button>
                            </div>
                            <div class="col-6" id="changePass" style="display: none">
                                <form action="{{ route('update_user_password',  $u->user_id) }}" method="post">
                                    @csrf
                                    <input type="text" name="old_password" id="oldPass" placeholder="Old Password" class="form-control mb-3">
                                    <input type="text" name="new_password"  id="newPass" placeholder="New Password" class="form-control mb-3">
                                    <input type="text" name="confirm_password"  id="confPass" placeholder="Confirm Password" class="form-control mb-3">
                                    <button type="submit" id="updatePassword" class="btn btn-danger">Confirm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4 pt-4" style="font-weight: 500; height: 355px; font-family: 'Poppins', sans-serif; color: white; background: #33415c; border-radius: 25px">
                    <div style="padding-left: 5px; padding-right: 5px">
                        <h4 class="mb-2">Statistics</h4>
                        <hr style="border-top: 1px solid white">
                        <h5 class="mb-2">Curriculum Vitae</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $cvPercentage; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalCv == 0 || $totalCv == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalCv }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalCv }} papers</h6>
                        @endif
                        <h5 class="mb-2">Brochure</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $brochurePercentage; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalBrochure == 0 || $totalBrochure == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalBrochure }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalBrochure }} papers</h6>
                        @endif
                        <h5 class="mb-2">Leaflet</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $leafletPercentage; ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalLeaflet == 0 || $totalLeaflet == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalLeaflet }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalLeaflet }} papers</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @elseif(strcmp(Session::get('role'), 'Expert') == 0)
        @foreach($expert as $e)
        <div class="row mt-4">
            <div class="col-md-2">
                <img src="{{ url('assets/' . $e->profile_picture) }}" alt="" width="190px" style="position: absolute">
                <a href="#" onclick="updateProfilePicture()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="position: relative; margin-top: 145px; margin-left: 140px; border: 2px #33415c solid; border-radius: 100px">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                </a>
            </div>

            <div class="col-md-6 mt-5">
                <h3>{{ $e->name }}</h3>
                <h6 style="font-weight: 300">Expert</h6>
                <div>
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z" />
                                <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                            </svg>
                        </div>
                        <div class="col" style="margin-left: -27px">
                            <h6 style="font-weight: 300; display: inline">{{ $e->dob }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4" id="changeProfilePicture" style="display: none; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
            <div class="col-8 mt-2 pt-3 pb-3" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                <h5>New Profile Picture</h5>
                <input class=" form-control" type="file" id="profilePicture">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container mt-4 pt-4 pb-4" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white; background: #33415c; border-radius: 25px">
                        <h4 class="ml-5">Profile Detail</h4>
                        <hr style="border-top: 1px solid white">
                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Fullname </h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $e->name }}</h6>
                                <div id="updateName" style="display: none">
                                    <hr style="border-top: 1px solid white">
                                    <form action="{{ route('update_expert_name',  $e->expert_id) }}" method="post">
                                        @csrf
                                        <input type="text" name="name" class="form-control" placeholder="New Name">
                                        <button type="submit" class="btn btn-danger mt-3">Confirm</button>
                                        @if($errors->any())
                                            <p style="color: red;">{{$errors->first()}}</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" id="changeName" onclick="updateName()" class="btn btn-danger">Change</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Address</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $e->address }}</h6>
                                <div id="updateAddress" style="display: none">
                                    <hr style="border-top: 1px solid white">
                                    <form action="{{ route('update_expert_address',  $e->expert_id) }}" method="post">
                                        @csrf
                                        <input type="text" name="address" class="form-control" placeholder="New Address">
                                        <button type="submit" class="btn btn-danger mt-3">Confirm</button>
                                        @if($errors->any())
                                            <p style="color: red;">{{$errors->first()}}</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="button" id="changeAddress" onclick="updateAddress()" class="btn btn-danger">Change</button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Username</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $e->username }}</h6>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <h6>Date of Birth</h6>
                            </div>
                            <div class="col-6">
                                <h6 style="font-weight: 700">{{ $e->dob }}</h6>
                            </div>
                        </div>
                        <hr style="border-top: 1px solid white">
                        <div class="row">
                            <div class="col-3">
                                <button type="button" id="changePassword" onclick="updatePassword()" class="btn btn-danger">Change Password</button>
                            </div>
                            <div class="col-6" id="changePass" style="display: none">
                                <form action="{{ route('update_expert_password',  $e->expert_id) }}" method="post">
                                    @csrf
                                    <input type="text" name="old_password" id="oldPass" placeholder="Old Password" class="form-control mb-3">
                                    <input type="text" name="new_password" id="newPass" placeholder="New Password" class="form-control mb-3">
                                    <input type="text" name="confirm_password" id="confPass" placeholder="Confirm Password" class="form-control mb-3">
                                    <button type="submit" id="updatePassword" class="btn btn-danger">Confirm</button>
                                    @if($errors->any())
                                        <p style="color: red;">{{$errors->first()}}</p>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4 pt-4" style="font-weight: 500; height: 355px; font-family: 'Poppins', sans-serif; color: white; background: #33415c; border-radius: 25px">
                    <div style="padding-left: 5px; padding-right: 5px">
                        <h4 class="mb-2">Statistics</h4>
                        <hr style="border-top: 1px solid white">
                        <h5 class="mb-2">Curriculum Vitae</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $cvPercentage; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalCv == 0 || $totalCv == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalCv }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalCv }} papers</h6>
                        @endif
                        <h5 class="mb-2">Brochure</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $brochurePercentage; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalBrochure == 0 || $totalBrochure == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalBrochure }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalBrochure }} papers</h6>
                        @endif
                        <h5 class="mb-2">Leaflet</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $leafletPercentage; ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @if($totalLeaflet == 0 || $totalLeaflet == 1)
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalLeaflet }} paper</h6>
                        @else
                        <h6 class="mb-2" style="text-align: right; font-weight: 300">{{ $totalLeaflet }} papers</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

@endsection
