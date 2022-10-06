@extends('layouts.app')

@section('title', 'Novo Usuário')
@section('content_header')
    <h1>Novo Aluno </h1>
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
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row">
            <x-input name="name" placeholder="Nome:" label="Nome:*" class-col="col-md-8" />
            <x-input name="cpf" placeholder="999.999.999-99" label="CPF:*" class-col="col-md-4" />
            <x-input name="email" placeholder="Email:" label="Email:*" class-col="col-md-8" />
            <x-input name="password" placeholder="Senha:" label="Senha:*" class-col="col-md-4" />
            <div class="col-md-12 text-end" style="margin-top: 2rem">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </div>
    </form>
@endsection
