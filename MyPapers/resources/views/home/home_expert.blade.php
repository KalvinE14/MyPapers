@extends('template/basic_template')

@section('content')
    <div class="container mt-5 pt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <button type="submit" class="btn btn-danger btn-lg ml-5" style="border-radius: 50px">View Order History</button>
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container mt-4" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <div class="row">
            <div class="col-md-6">
                <h3>Upcoming Order</h3>
                @for ($i = 0; $i < 10; $i++)
                    <div class="container mt-3 pt-3 pb-1" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 style="display: inline;">CV FOR INTERNSHIP</h4>
                                <span class="badge rounded-pill bg-danger" style="margin-left: 6px">Curriculum Vitae</span>
                                <div>
                                    <img style="margin-right: 5px" class="pt-1 mt-2" src="{{ url('assets/profilepicture2.png') }}" alt="" width="50px">
                                    <h5 style="display: inline;">John Doe</h5>
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: right">
                                <a class="btn" style="color: white">
                                    <h5 style="margin-top: 50%">See More ></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-md-6">
                <h3>Available Order</h3>
                @for ($i = 0; $i < 10; $i++)
                    <div class="container mt-3 pt-3 pb-3" style="background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 style="display: inline">CV FOR INTERNSHIP</h4>
                                <span class="badge rounded-pill bg-danger" style="margin-left: 6px">Curriculum Vitae</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <hr style="border-top: 1px solid white">
                            <img style="margin-right: 5px" class="pt-1 mt-2" src="{{ url('assets/profilepicture.png') }}" alt="" width="50px">
                            <h4 style="display: inline; margin-top: 20px">Vanessa Smith</h4>
                        </div>
                        <hr style="border-top: 1px solid white">
                        <h5>Requirement</h5>
                        <h6 style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est odio aliquid cumque officiis atque odit, distinctio quibusdam modi molestiae, officia labore soluta laborum explicabo provident aperiam facilis veniam. Fuga, nihil.</h6>
                        <h5>Description</h5>
                        <h6 style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est odio aliquid cumque officiis atque odit, distinctio quibusdam modi molestiae, officia labore soluta laborum explicabo provident aperiam facilis veniam. Fuga, nihil.</h6>
                        <h5>Type</h5>
                        <h6 style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est odio aliquid cumque officiis atque odit, distinctio quibusdam modi molestiae, officia labore soluta laborum explicabo provident aperiam facilis veniam. Fuga, nihil.</h6>
                        <button type="submit" class="btn btn-danger ml-5" style="border-radius: 10px; width: 100%">Accept</button>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
