@extends('../template/basic_template')

@section('title', "Choose Paper's Type")

@section('content')

    <div class="mb-5" style="text-align: center;margin-bottom: 40px; margin-top: 40px; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <h1 style="color: white;">Choose Paper's Type</h1>
    </div>

    <div class="row justify-content-center align-items-center pt-5" style="margin-left: 10px;margin-bottom: 30px;text-align: center; font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <div class="col-lg3" style="border-radius: 25px; background-color:#33415c;text-align: center;margin-left: 25px;margin-right: 100px;width: 300px;">
            <h3 style="margin-top: 10px;">CV</h1>
                <img style="margin-bottom: 20px;" src="{{ url('assets/cv.png') }}" alt="cv" width="250px" height="250px"><br>
                <a href="{{ route('create_paper_cv') }}"><button style="margin-bottom: 10px; border-radius: 25px; width: 100%" type="submit" class="btn btn-danger">Create CV</button></a>
        </div>
        <div class="col-lg3" style="border-radius: 25px; background-color:#33415c;text-align: center;margin-left: 5px;margin-right: 100px;width: 300px;">
            <h3 style="margin-top: 10px;">Brochure</h1>
                <img style="margin-bottom: 20px;" src="{{ url('assets/brochure.png') }}" alt="brochure" width="250px" height="250px"><br>
                <a href="{{ route('create_paper_brochure') }}"><button style="margin-bottom: 10px; border-radius: 25px; width: 100%" type="submit" class="btn btn-danger">Create Brochure</button></a>
        </div>
        <div class="col-lg3" style="border-radius: 25px; background-color:#33415c;text-align: center;width: 300px;margin-right: 25px">
            <h3 style="margin-top: 10px;">Leaflet</h1>
                <img style="margin-bottom: 20px;" src="{{ url('assets/leaflet.png') }}" alt="leaflet" width="250px" height="250px"><br>
                <a href="{{ route('create_paper_leaflet') }}"><button style="margin-bottom: 10px; border-radius: 25px; width: 100%" type="submit" class="btn btn-danger">Create Leaflet</button></a>
        </div>
    </div>

@endsection
