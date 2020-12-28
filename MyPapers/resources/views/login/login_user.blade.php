@extends('template_login.template_login')
@section('title', 'Login User')

@section('action')
<form action="{{ route('login_user') }}" method="post">
@endsection