@extends('layouts.app')

@section('title', "Editar Disciplina {$disciplinary->name}")

@section('content')

<h1>Editar Disciplina {{ $disciplinary->name }}</h1>

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
    <input type="text" name="name" placeholder="Nome:" value="{{$disciplinary->name}}">
    <input type="email" name="email" placeholder="E-mail:"value="{{$disciplinary->email}}">
    {{-- <input type="password" name="password" placeholder="Senha:"> --}}
    <button type="submit">
        Enviar
@endsection
