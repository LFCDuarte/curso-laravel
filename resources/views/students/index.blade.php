@extends('layouts.app')

@section('title', 'Listagem dos Professores')
@section('content_header')
    <h1>Listagem dos Alunos </h1>
@stop
@section('content')
<div class="row">
<div class="text-end">

    <a class="btn btn-primary" href="{{route ('students.create')}}"><i class="fas fa-plus"></i> Cadastrar</a>
</div>
</div>

<form action="{{ route ('students.index') }}" method="get">
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

        @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>
                <a class="btn btn-outline-success" href="{{ route('students.edit', $student->id)}}"><i class="fas fa-pen"></i></a>
                <a class="btn btn-outline-danger" href="{{ route('students.show', $student->id)}}"><i class="fas fa-trash"></i></a>
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
