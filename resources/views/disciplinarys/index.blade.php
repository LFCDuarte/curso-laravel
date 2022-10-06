@extends('layouts.app')

@section('title', 'Listagem das Disciplinas')
@section('content_header')
    <h1>Listagem das Disciplinas</h1>
@stop
@section('content')
<div class="row">
<div class="text-end">

    <a class="btn btn-primary" href="{{route ('disciplinarys.create')}}"><i class="fas fa-plus"></i> Cadastrar</a>
</div>
</div>
    

<form action="{{ route ('disciplinarys.index') }}" method="get">
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
<table class="table table-bordered table-hover dataTable" id="test" >
    <thead>
     <tr>
        <th>Nome</th>
        <th>Carga Horaria</th>
        <th>Ações</th>
     </tr>
    </thead>
    <tbody>

        @foreach ($disciplinarys as $disciplinary)
        <tr>
            <td>{{$disciplinary->name_disciplinary}}</td>
            <td>{{$disciplinary->workload}}</td>
            <td>
                <a class="btn btn-outline-success" href="{{ route('disciplinarys.edit', $disciplinary->id)}}"><i class="fas fa-pen"></i></a>
                <a class="btn btn-outline-danger" href="{{ route('disciplinarys.show', $disciplinary->id)}}"><i class="fas fa-trash"></i></a>
             </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop
@section('js')
<script>
    $(document).ready( function () {
        $('#test').DataTable({
        language: {
            url: 'datatable.pt-BR.json '
        }
    })
    } );
</script>
@stop