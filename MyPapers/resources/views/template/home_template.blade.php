@extends('template/basic_template')

@section('title', 'Home')

@section('content')
    <div class="container mb-4 mt-5">
        <div class="container" style="font-weight: 700; font-family: 'Poppins', sans-serif; color: white; letter-spacing: 1px;"><h2>@yield('list_title')</h2></div>
    </div>
    
    <div class="container" style="display: flex">
        <div class="container mb-5" style="background: red; width: 73%; float: left; margin-right: 20px">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, minima porro perspiciatis provident eos adipisci laborum dolores, nostrum vitae id, recusandae dolore debitis sed illo. Deleniti labore quis optio fugit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsam beatae, optio voluptatem eaque tempore ratione doloremque nisi quis fugit. Accusantium, sunt molestiae fugit autem nam iusto recusandae? Dicta, cupiditate!
            @yield('list')
        </div>
        <div class="container mb-5" style="background: white; width: 27%; float: right">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus vero asperiores atque vitae repudiandae nulla, mollitia voluptatem velit! Accusantium ea iusto, nihil corporis consequatur molestiae atque hic aut corrupti.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores sequi, amet aperiam officia recusandae at tenetur error nulla a excepturi optio adipisci laboriosam et dolor quo ea assumenda perferendis. Neque.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quo reiciendis sint. Maxime sed vel aspernatur deserunt consequatur perspiciatis aperiam recusandae tempore dolore a adipisci, mollitia amet, autem fuga nesciunt.
            @yield('statistics')
        </div>
    </div>
    
@endsection