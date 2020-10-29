<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
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
                <td> {{$p->file}} </td>
                <td> {{$p->preview}} </td>
            </tr>
        @endforeach
    </table>
</body>
</html>