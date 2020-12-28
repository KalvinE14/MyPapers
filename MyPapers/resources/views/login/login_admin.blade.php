@extends('template_login.template_login')
@section('title', 'Login Admin')

@section('action')
<form action="{{ route('login_admin') }}" method="post">
@endsection