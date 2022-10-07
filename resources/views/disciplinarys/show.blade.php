@extends('layouts.app')

@section('title', 'Listagem do Professor')

@section('content')

<h1>Listagem das Disciplinas {{$disciplinary->name}}</h1>

<ul>
        
    <li> {{$disciplinary->name_disciplinary}} </li>
    <li> {{$disciplinary->workload}} </li>
    <li> {{$disciplinary->created_at}}</li>

</ul>

<form action="{{ route('disciplinarys.delete', $disciplinary->id)}}" method="POST">
    @method('DELETE')
    @csrf  
    <button type= "submit"> Deletar</button>

</form>

@endsection
