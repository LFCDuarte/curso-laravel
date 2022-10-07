@extends('layouts.app')

@section('title', "Editar Professor {$instructor->name}")
@section('content_header')
    <h1>Editar Professor {{ $instructor->name }}</h1>
@stop
@section('content')



@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error"> {{ $error }}></li>
        @endforeach
    </ul>
@endif

<form action="{{ route('instructors.update', $instructor->id) }}" method="post">
    @method('PUT')
    @csrf

<div>
    <x-input type="text" name="name" placeholder="Nome:" label="Nome:" value="{{$instructor->name}}"/>
    <x-input type="email" name="email" placeholder="E-mail:" label="Email:" value="{{$instructor->email}}"/>
    <x-input type="password" name="password" placeholder="Senha:" label="Senha:"/>
    <div class="col-md-12 text-end" style="margin-top: 2rem">
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>
</div>

</form>

@endsection
