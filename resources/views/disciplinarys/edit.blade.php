@extends('layouts.app')

@section('title', "Editar Disciplina {$disciplinary->name}")
@section('content_header')
    <h1>Editar Disciplina {{ $disciplinary->name }}</h1>
@stop
@section('content')



@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }}></li>
        @endforeach
    </ul>
@endif

<form action="{{ route('disciplinarys.update', $disciplinary->id) }}" method="post">
    @method('PUT')
    @csrf

<div class="row">
    <x-input type="text" class='form-control' name="name_disciplinary" placeholder="Nome:" label="Nome" value="{{$disciplinary->name_disciplinary}}"/>
    <x-input type="numeric" class='form-control' name="workload" placeholder="Carga Horaria:" label="Carga Horaria" value="{{$disciplinary->workload}}"/>
    <div class="col-md-12 text-end" style="margin-top: 2rem">
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>
</div>
</form>
    {{-- <button type="submit"> --}}
@endsection
