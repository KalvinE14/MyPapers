@extends('../template/basic_template')

@section('title', "Choose Paper's Type")

@section('content')

    <div style="text-align: center;margin-bottom: 40px;">
        <h1 style="color: white;">Choose Paper's Type</h1>
    </div>

    <div class="row justify-content-center align-items-center" style="margin-left: 10px;margin-bottom: 30px;text-align: center;">
        <div class="col-lg3" style="border-radius: 25px; background-color:#93c4b9;text-align: center;margin-left: 25px;margin-right: 100px;width: 300px;">
            <h3 style="margin-top: 10px;">CV</h1>
            <img style="margin-bottom: 20px;" src="{{ url('assets/cv.png') }}" alt="cv" width="250px" height="250px"><br>
            <button style="margin-bottom: 10px;" type="submit" class="btn btn-danger" style="border-radius: 15px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 100px;">Create CV</button>
        </div>
        <div class="col-lg3" style="border-radius: 25px; background-color:#f2ece9;text-align: center;margin-left: 5px;margin-right: 100px;width: 300px;">
            <h3 style="margin-top: 10px;">Brochure</h1>
            <img style="margin-bottom: 20px;" src="{{ url('assets/brochure.png') }}" alt="brochure" width="250px" height="250px"><br>
            <button style="margin-bottom: 10px;" type="submit" class="btn btn-danger" style="border-radius: 15px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 100px;">Create Brochure</button>
        </div>
        <div class="col-lg3" style="border-radius: 25px; background-color:#aba9a8;text-align: center;width: 300px;margin-right: 25px">
            <h3 style="margin-top: 10px;">Leaflet</h1>
            <img style="margin-bottom: 20px;" src="{{ url('assets/leaflet.png') }}" alt="leaflet" width="250px" height="250px"><br>
            <button style="margin-bottom: 10px;" type="submit" class="btn btn-danger" style="border-radius: 15px; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; color: white;width: 100px;">Create Leaflet</button>
        </div>
    </div>
    
@endsection