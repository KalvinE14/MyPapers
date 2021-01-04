@extends('template/basic_template')

@section('content')

    <div class="container mt-5" style="font-weight: 500; font-family: 'Poppins', sans-serif; color: white;">
        <div class="row">
            <div class="col-md">
                <a href="{{ route('view_all_user') }}" style="color: inherit; text-decoration: none;">
                    <div class="container mt-5 pt-5" style="text-align: center; background:#33415c; width: 100%; height: 100%; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                        <h4>All User</h4>
                    </div>
                </a>
            </div>
            <div class="col-md">
                <a href="{{ route('view_all_expert') }}" style="color: inherit; text-decoration: none;">
                    <div class="container mt-5 pt-5" style="color: white; text-align: center; background:#33415c; width: 100%; height: 100%; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <h4 style="text-decoration: none">All Expert</h4>
                    </div>
                </a>
            </div>
            <div class="col-md">
                <a href="{{ route('view_all_paper') }}" style="color: inherit; text-decoration: none;">
                    <div class="container mt-5 pt-5" style="text-align: center; background:#33415c; width: 100%; height: 100%; border-radius: 15px; padding-left: 20px; padding-right: 20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h4>All Paper</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
