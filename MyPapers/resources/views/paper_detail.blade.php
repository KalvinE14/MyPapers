@extends('template/basic_template')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-2">
                <img src="assets/previewpaper1.png" alt="" width="200px">
            </div>
            <div class="col-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                <h2>JANE DOE'S CURRICULUM VITAE</h2>
                <h5>Requirement</h5>
                <h6 class="mb-3" style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptate temporibus molestias beatae! Reprehenderit, neque ipsa rerum saepe eum unde! Dignissimos voluptatum perspiciatis eaque incidunt sed. Esse eum sit inventore.</h6>
                <h5>Description</h5>
                <h6 class="mb-3" style="font-weight: 100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptate temporibus molestias beatae! Reprehenderit, neque ipsa rerum saepe eum unde! Dignissimos voluptatum perspiciatis eaque incidunt sed. Esse eum sit inventore.</h6>            
                <h5>Type</h5>
                <h6 class="mb-3" style="font-weight: 100">Curriculum Vitae</h6>
            </div>
            <div class="col-5 mt-5" style="display: inline; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                <h5>Additional File</h5>
                <div class="input-group mb-5">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <h5>Download Paper</h5>
                <div class="row mb-5">
                    <div class="col-3 mt-1">
                        <span><h6 class="mb-4 mt-2" style="font-weight: 100; width: 40%;">PaperDone.pdf</h6></span>
                    </div>
                    <div class="col-9">
                        <span><button type="submit" class="btn btn-danger mt-1" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white;">Download</button></span>
                    </div>
                </div>
                
                <button type="button" class="btn btn-success" style="width: 100%; border-radius: 50px">Finish</button>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <h3>Comments - 5</h3>
    </div>
    <div class="container mb-5">
        @php
            $x = 0;    
        @endphp

        @while ($x <= 4)
            @if ($x % 2 == 0)
                <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #2a9d8f; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                    @if ($x % 2 == 0)
                        <div class="row">
                            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <img class="ml-5" src="assets/profilepicture.png" alt="" width="150px">
                                Vanessa Smith
                            </div>
                            <div class="col-10 mt-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates repellendus accusantium cumque nulla nisi aperiam tempora cum, perferendis recusandae dolore? Asperiores nostrum enim numquam veniam accusantium nulla aliquam fuga!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias totam qui architecto perspiciatis facere similique voluptatem aliquid odit magni ullam quis tenetur at dicta corporis ipsa, voluptas hic nobis.
                                Sun, 20 February 2020; 21:45
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-10 mt-3" style="text-align: right; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates repellendus accusantium cumque nulla nisi aperiam tempora cum, perferendis recusandae dolore? Asperiores nostrum enim numquam veniam accusantium nulla aliquam fuga!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias totam qui architecto perspiciatis facere similique voluptatem aliquid odit magni ullam quis tenetur at dicta corporis ipsa, voluptas hic nobis.
                                <br><br>
                                Sun, 20 February 2020; 21:45
                            </div>
                            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <img class="ml-5" src="assets/profilepicture2.png" alt="" width="150px">
                                John Doe
                            </div>
                        </div>
                    @endif
                </div>
            @else
                <div class="container mt-3 mb-1 pt-3 pb-3 pl-3 pr-3" style="background: #81b29a; box-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">    
                    @if ($x % 2 == 0)
                        <div class="row">
                            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <img class="ml-5" src="assets/profilepicture.png" alt="" width="150px">
                                Vanessa Smith
                            </div>
                            <div class="col-10 mt-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates repellendus accusantium cumque nulla nisi aperiam tempora cum, perferendis recusandae dolore? Asperiores nostrum enim numquam veniam accusantium nulla aliquam fuga!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias totam qui architecto perspiciatis facere similique voluptatem aliquid odit magni ullam quis tenetur at dicta corporis ipsa, voluptas hic nobis.
                                Sun, 20 February 2020; 21:45
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-10 mt-3" style="text-align: right; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptates repellendus accusantium cumque nulla nisi aperiam tempora cum, perferendis recusandae dolore? Asperiores nostrum enim numquam veniam accusantium nulla aliquam fuga!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestias totam qui architecto perspiciatis facere similique voluptatem aliquid odit magni ullam quis tenetur at dicta corporis ipsa, voluptas hic nobis.
                                <br><br>
                                Sun, 20 February 2020; 21:45
                            </div>
                            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                                <img class="ml-5" src="assets/profilepicture2.png" alt="" width="150px">
                                John Doe
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            
            @php
                $x++;
            @endphp
        @endwhile
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2" style="text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                <img class="ml-5" src="assets/profilepicture2.png" alt="" width="150px"  style="round-shadow: 10px 8px 8px 5px rgba(0, 0, 0, 0.2);">
                <h6 class="mt-2">John Doe</h6>
            </div>
            <div class="col-10">
                <div class="mb-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
                    <h5 class="mb-3">Reply to Expert</h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-danger mt-3" style="width: 120px; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; color: white">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
@endsection