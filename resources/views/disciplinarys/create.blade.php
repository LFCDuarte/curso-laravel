@extends('layouts.app')

@section('title', 'Novo Disciplina')
@section('content_header')
    <h1>Nova Disciplina</h1>
@stop
@section('content')



@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }}></li>
        @endforeach
    </ul>
@endif

<form action="{{ route ('disciplinarys.store')}}" method="post">
     @csrf
        <div class="row">
            <div class="col-md-7">
                <input type="text" name="name_disciplinary" class="form-control" placeholder="Materia:"><br>
            </div>
            
            <div class="col-md-7">
                <input type="text" name="workload" class="form-control" placeholder="Carga Horaria:"><br>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Salvar</button> 
@endsection
