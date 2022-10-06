@extends('layouts.app')

@section('title', "Editar Aluno {$student->name}")
@section('content_header')
    <h1>Editar Aluno {{ $student->name }}</h1>
@stop
@section('content')



@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }}></li>
        @endforeach
    </ul>
@endif

<form action="{{ route('students.update', $student->id) }}" method="post">
    @method('PUT')
    @csrf

<div>
    <x-input type="text" name="name" placeholder="Nome:" label="Nome:" value="{{$student->name}}"/>
    <x-input type="email" name="email" placeholder="E-mail:" label="Email:" value="{{$student->email}}"/>
    <div class="col-md-12 text-end" style="margin-top: 2rem">
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>
</form>

@endsection
