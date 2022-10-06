@extends('layouts.app')

@section('title', 'Novo Usuário')
@section('content_header')
    <h1>Novo Professor</h1>
@stop
@section('content')
@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    </ul>
@endif
<form action="{{ route ('students.store')}}" method="post">
     @csrf
    {{-- <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}">
    <input type="email" name="email" placeholder="E-mail:"value="{{old('email')}}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit"> --}}
        {{-- <div class="row">
            <div class="col-md-7">
                <input type="text" name="name" class="form-control" placeholder="Nome:"><br>
            </div>
    
            <div class="col-md-4">
                <input type="text" name="cpf" class="form-control" placeholder="CPF:"><br>
            </div>
    
            <div class="col-md-7">
                <input type="text" name="email" class="form-control" placeholder="E-mail:"><br>
            </div>
    
            <div class="col-md-4">
                <input type="text" name="password" class="form-control" placeholder="Senha:"><br>
            </div>
        </div>
     --}}
        {{-- <div class="col-md-12 text-end" style="margin-top: 2rem">
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>        --}}
        <div class="row">
            <x-input name="name" placeholder="Nome:" label="Nome:*" class-col="col-md-8" />
            <x-input name="cpf" placeholder="999.999.999-99:" label="CPF:*" class-col="col-md-4" />
            <x-input name="email" placeholder="Email:" label="Email:*" class-col="col-md-8" />
            <x-input name="password" placeholder="Senha:" label="Senha:*" class-col="col-md-4" />
            <div class="col-md-12 text-end" style="margin-top: 2rem">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </div>
    </form>
@endsection
