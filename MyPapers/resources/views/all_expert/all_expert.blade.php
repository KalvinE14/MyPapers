@extends('template/basic_template')

@section('content')

    <div class="container mt-5 mb-5" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white; ">
        <h1 style="color: white;">View All Expert</h1>
    </div>

    <div class="container mt-5 mb-4" style="margin-left: 25px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <button type="submit" onclick="hireEmployee()" class="btn btn-danger btn-lg" style="border-radius: 50px">Hire New Employee</button>
        <div class="row mt-4" style="margin-left: 1px; display: none" id="hireEmployee">
            <div class="col-6 pt-4 pb-4" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px"">
                                    <input type=" text" id="oldPass" placeholder="Name" class="form-control mb-3">
                <input type="text" id="newPass" placeholder="Username" class="form-control mb-3">
                <input type="text" id="confPass" placeholder="Password" class="form-control mb-3">
                <input type="text" id="newPass" placeholder="Address" class="form-control mb-3">
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" id="dob">
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" style="display: inline" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <button type="button" id="updatePassword" class="btn btn-danger" style="border-radius: 10px; width: 100%">Confirm</button>
            </div>
        </div>
    </div>

    <div class="row mt-4" style="padding-left: 30px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        @for ($i = 0; $i < 3; $i++)
            <div class="col-lg3" style="border-radius: 20px; background-color: #33415c; width: 380px; margin-right: 20px; margin-left: 20px; padding-top: 20px; padding-bottom: 20px;">
                <div id="header">
                    <div class="row">
                        <div class="col-lg3" style="width: fit-content;">
                            <img style="border-radius: 50%;" src="{{ url('assets/profilepicture.png') }}" alt="" width="105px" height="105px">
                        </div>

                        <div class="col-lg3" style="width: 230px; margin-right: 20px; word-wrap: break-word;margin-top: auto; margin-bottom: auto;">
                            <div>
                                <h5 style="color: white;">Vanessa Smith</h5>
                            </div>

                            <div style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <p style="font-weight: 100;">January 30th, 2020</p>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-danger btn-sm" style="height: 30px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; color: white;width: 110px;">Remove</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <hr style="background-color: white;margin-right: 10px;margin-left: 10px;">
                </div>

                <div class="container">
                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Username</h5>
                        <p style="font-weight: 100;color: white;">vanessasmith3</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Password</h5>
                        <p style="font-weight: 100;color: white;">vanessasmith123</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Address</h5>
                        <p style="font-weight: 100;color: white;">Sweet Water Street 33</p>
                    </div>

                    <div style="word-wrap: break-word;">
                        <h5 style="color: white;">Gender</h5>
                        <p style="font-weight: 100;color: white;">Female</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>


@endsection
