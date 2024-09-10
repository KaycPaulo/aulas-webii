@extends('templates.main')

@section('content')
<form action="{{route('curso.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label class="mt-3">Nome</label>
    <input type="text" name="name" class="form-control"/>
    <label class="mt-3">Abreviatura</label>
    <input name="abreviatura" class="form-control mt-1">
    <label class="mt-3">Duração(anos)</label>
    <input type="number"name="time" class="form-control mt-1">
    <label class="mt-3">Eixo</label>
    <label name='class'>Classifição da Especie</label>
    <select name="eixo" class="form-control mt-2">
        <option selected disabled></option>
        @foreach($eixos as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <!-- <input type="file" name="foto" class="mt-2 form-control" accept=".jpg, .png"> -->
    <input type="submit" value="Salvar" class="btn btn-success mt-2">
</form>
@endsection