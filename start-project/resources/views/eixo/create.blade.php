@extends('templates.main')

@section('content')
<form action="{{route('eixo.store')}}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control mt-3"/>
    <textarea name="description" rows="5" class="form-control mt-1">
    </textarea>
    <input type="submit" value="Salvar" class="btn btn-success mt-1">
</form>
@endsection