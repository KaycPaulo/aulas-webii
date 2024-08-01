@extends('templates.main')

@section('content')
<table class="table table-dark table-striped">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
    </thead>

    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection