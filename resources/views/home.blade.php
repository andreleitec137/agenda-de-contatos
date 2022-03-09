@extends('layouts.header')

@section('content')
<div class="col-md-12">
    <div class="container">
        <h1>Agenda de Contatos</h1>

        @foreach($contatos as $contato)
        
            <span>Nome: {{$contato->Nome}} </span><br>
            <span>Telefone: {{$contato->Telefone}} </span><br>
            <span>Email: {{$contato->Email}} </span><br><br>

            <a href="/edit/{{$contato->ID}}">Editar Contato</a>
            <a href="/delete/{{$contato->ID}}">Apagar Contato</a>
            <hr>
        @endforeach
    </div>
</div>
@stop

