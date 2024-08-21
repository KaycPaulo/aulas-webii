@extends('templates.main')

@section('content')

@csrf
<label class="mt-3">Nome</label>
<input type="text" name="name" class="form-control" value="{{$eixo->name}}" disabled />
<label class="mt-3">Descrição</label>
<textarea name="description" rows="5" class="form-control" disabled>
{{$eixo->description}}
</textarea>
<ul class="list-group mt-2">
  <li class="list-group-item active" aria-current="true">Cursos de {{$eixo->name}}</li>
  <li class="list-group-item">Amanda</li>
 @foreach($eixo->curso as $item)
  <li class="list-group-item">{{$item->nome}}</li>
  @endforeach
</ul>
<a href="{{route('eixo.index')}}" class="btn btn-secondary mt-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
    </svg>
    
</a>
@endsection