@extends('template/basic_template')

@section('content')
    <div class="container mt-5 pt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <button type="submit" class="btn btn-danger btn-lg" style="border-radius: 50px; margin-right: 8px">Create Paper</button>
        <button type="submit" class="btn btn-danger btn-lg ml-5" style="border-radius: 50px">View Order History</button>
    </div>
    <div class="container">
        <hr style="border-top: 1px solid white">
    </div>
    <div class="container">
        <h2 class="mt-4" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">Ongoing Order</h2>
    </div>
    <div class="container">
        @for ($i = 0; $i < 10; $i++)
            <div class="container mt-4 pt-3 pb-3" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white; background:#33415c; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                <div class="row">
                    <div class="col-4">
                        <h4>CV FOR INTERNSHIP</h4>
                        <span class="badge rounded-pill bg-danger">Curriculum Vitae</span>
                    </div>
                    <div class="col-3">
                        <div class="container pt-1">
                            <img style="display: inline; margin-right: 5px" class="pt-1" src="{{ url('assets/profilepicture2.png') }}" alt="" width="50px">
                            <h5 style="display: inline;">John Doe</h5>
                        </div>
                    </div>
                    <div class="col-3 pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z" />
                            <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z" />
                        </svg>
                        <h5 style="margin-left: 3px; display: inline">January 20th, 2020</h5>
                    </div>
                    <div class="col-2 mt-1" style="text-align: right">
                        <button type="submit" class="btn btn-danger btn-lg pt-2" style="border-radius: 50px; margin-right: 8px">
                            <h5>Cancel Order</h5>
                        </button>
                    </div>
                </div>
            </div>
        @endfor
    </div>

@endsection
