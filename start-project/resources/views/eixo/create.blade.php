@extends('templates.main')

@section('content')
<form action="{{route('eixo.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label class="mt-3">Nome</label>
    <input type="text" name="name" class="form-control"/>
    <label class="mt-3">Descrição</label>
    <textarea name="description" rows="5" class="form-control mt-1">
    </textarea>
    <input type="file" name="foto" class="mt-2 form-control" accept=".jpg, .png">
    <input type="submit" value="Salvar" class="btn btn-success mt-1">
</form>
@endsection