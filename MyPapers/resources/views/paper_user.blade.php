@extends('template')

@section('title', "User's Paper")

@section('content')

    <div class="row" style="margin-left: 0px;margin-bottom: 10px;">
        <div class="col-xs-6" style="margin-right: 10px;">
            <a href="{{ route('pending_paper', 1) }}">
                <button class="btn btn-danger" style="margin-top: 20px; ">Pending Paper</button>
            </a>
        </div>

        <div class="col-xs-6">
            <a href="{{ route('finished_paper', 1) }}">
                <button class="btn btn-danger" style="margin-top: 20px; ">Finished Paper</button>
            </a>
        </div>
    </div>

    <div style="margin-bottom: 10px;">
        <table border="1" cellpadding="10" cellspacing="0">

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th>
            <th>Requirement</th>
            <th>Description</th>
            <th>Status</th>
            <th>File</th>
            <th>Preview</th>
        </tr>

        @foreach($papers as $p)
            <tr>
                <td> {{$p->paper_id}} </td>
                <td> {{$p->title}} </td>
                <td> {{$p->type}} </td>
                <td> {{$p->requirement}} </td>
                <td> {{$p->description}} </td>
                <td> {{$p->status}} </td>
                <td> <img src="{{ url('assets/' . $p->file) }}" alt="..." width="200px"> </td>
                <td> <img src="{{ url('assets/' . $p->preview) }}" alt="..." width="200px"> </td>
            </tr>
        @endforeach
        </table>
    </div>
 @endsection
    
