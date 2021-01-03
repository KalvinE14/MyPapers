@extends('../template/basic_template')

@section('title', "View All User")

@section('content')

    <div style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;margin-top: 50px;margin-bottom: 100px;">
        <h1 style="color: white;">View All User</h1>
    </div>

    <div class="row" style="padding-left: 30px;">
    @foreach($users as $user)
        <div class="col-lg3" style="border-radius: 20px; background-color: #33415c; width: 380px; margin-right: 20px; margin-left: 20px; padding-top: 20px; padding-bottom: 20px;">
            <div id="header">
                <div class="row" >
                    <div class="col-lg3" style="width: fit-content;">
                        <img style="border-radius: 50%;" src="{{ url('assets/' . $user->profile_picture) }}" alt="" width="105px" height="105px">
                    </div>

                    <div class="col-lg3" style="font-weight: 500; font-family: 'Poppins', sans-serif; width: 230px; margin-right: 20px; word-wrap: break-word;margin-top: auto; margin-bottom: auto;">
                        <div>
                            <h5 style="color: white;">{{ $user->name }}</h5>
                        </div>    
                    
                        <div style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                           <p style="font-weight: 100;">{{ $user->dob }}</p>
                        </div>

                        <div>
                            <form action="{{ route('remove_user', $user->user_id) }}" method="post">
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

            <div class="container" style="font-weight: 500; font-family: 'Poppins', sans-serif;">
                <div style="word-wrap: break-word;">
                    <h5 style="color: white;">User ID</h5>
                    <p style="font-weight: 100;color: white;">{{ $user->user_id }}</p>
                </div>

                <div style="word-wrap: break-word;">
                    <h5 style="color: white;">Username</h5>
                    <p style="font-weight: 100;color: white;">{{ $user->username }}</p>
                </div>

                <div style="word-wrap: break-word;">
                    <h5 style="color: white;">Address</h5>
                    <p style="font-weight: 100;color: white;">{{ $user->address }}</p>
                </div>

                <div style="word-wrap: break-word;">
                    <h5 style="color: white;">Gender</h5>
                    <p style="font-weight: 100;color: white;">{{ $user->gender }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection