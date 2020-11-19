<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
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
</body>
</html>