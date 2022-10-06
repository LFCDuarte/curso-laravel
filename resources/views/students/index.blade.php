@extends('layouts.app')

@section('title', 'Listagem dos Professores')
@section('content_header')
    <h1>Listagem dos Professores</h1>
@stop
@section('content')
<div class="row">
<div class="text-end">

    <a class="btn btn-primary" href="{{route ('instructors.create')}}"><i class="fas fa-plus"></i> Cadastrar</a>
</div>
</div>

<form action="{{ route ('instructors.index') }}" method="get">
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Pesquisar">
        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-outline-success " style="width: 100%">Pesquisar</button>
        </div>
    </div>

    {{-- <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div> --}}
</form>
<table class="table table-bordered table-hover dataTable" id="test">
    <thead class="bg-primary">
     <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
     </tr>
    </thead>
    <tbody>

        @foreach ($instructors as $instructor)
        <tr>
            <td>{{$instructor->name}}</td>
            <td>{{$instructor->email}}</td>
            <td>
                <a class="btn btn-outline-success" href="{{ route('instructors.edit', $instructor->id)}}"><i class="fas fa-pen"></i></a>
                <a class="btn btn-outline-danger" href="{{ route('instructors.show', $instructor->id)}}"><i class="fas fa-trash"></i></a>
             </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop
@section('js')
<script>
    console.log('ui,');
    $(document).ready( function () {
        $('#test').DataTable( {
        language: {
            url: 'datatable.pt-BR.json '
        }
    } );
    } );
</script>
@stop
