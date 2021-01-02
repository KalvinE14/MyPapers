@extends('../template/basic_template')

@section('title', "View All User")

@section('content')

    <div style="text-align: center;margin-bottom: 50px;margin-top: 40px;">
        <h1 style="color: white;">View All User</h1>
    </div>

    <div class="row" style="padding-left: 30px;">
    @for($i = 0; $i < 3; $i++)
        <div class="col-lg3" style="background-color: #33415c; width: 380px; margin-right: 20px; margin-left: 20px; padding-top: 20px; padding-bottom: 20px;">
            <div id="header">
                <div class="row" >
                    <div class="col-lg3" style="width: fit-content;">
                        <img style="border-radius: 50%;" src="{{ url('assets/profilepicture.png') }}" alt="" width="105px" height="105px">
                    </div>

                    <div class="col-lg3" style="width: 230px; margin-right: 20px; word-wrap: break-word;margin-top: auto; margin-bottom: auto;">
                        <div>
                            <h5 style="color: white;">Vanessa Smithaaaaa</h5>
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