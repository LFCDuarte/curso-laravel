@extends('layouts.app')

@section('title', 'Listagem do Estudande')

@section('content')

<h1>Listagem do Professor {{$student->name}}</h1>

<ul>
        
    <li> {{$student->name}} </li>
    <li> {{$student->email}} </li>
    <li> {{$student->created_at}}</li>

</ul>

<form action="{{ route('students.destroy', $student->id)}}" method="POST">
    @method('DELETE')
    @csrf  
    <button type= "submit"> Deletar</button>

</form>

@endsection
