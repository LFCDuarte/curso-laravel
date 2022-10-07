@extends('layouts.app')

@section('title', "Editar Usuário {$user->name}")
@section('content_header')
    <h1>Editar Aluno {{ $user->name }}</h1>
@stop
@section('content')



@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }}></li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf

<div class="row">
    <x-input type="text" class='form-control' name="name" placeholder="Nome:" label="Nome:" value="{{$user->name}}"/>
    <x-input type="email" name="email" placeholder="E-mail:" label="Email:" value="{{$user->email}}"/>
    <x-input type="password" name="password" placeholder="Senha:" label="Senha:"/>
    <div class="col-md-12 text-end" style="margin-top: 2rem">
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>
</div>
</form>
        
@endsection
