@extends('layouts.header')

@section('content')
<div class="col-md-12">
    <div class="container">
        <h1>Agenda de Contatos</h1>
        <Br><br>
        @foreach($contatos as $contato)
            <h3>{{$contato->Nome}} </h3><p></p>
            <h4>Informações de Contato</h4>
            <span>Telefone: {{$contato->Telefone}} </span><br>
            <span>Email: {{$contato->Email}} </span><br><br>

            <h4>Endereço</h4>
            <span>{{$contato->rua}}, {{$contato->numero}}, {{$contato->bairro}}, {{$contato->cidade}}, {{$contato->estado}}, {{$contato->cep}}</span>
            @if($contato->complemento != null || $contato->complemento != "")
            <br>
            <span>Complemento: {{$contato->complemento}}</span>
            @endif
            <Br><br>
            <a class="editButton" href="/edit/{{$contato->ID}}">Editar Contato</a>
            <a class="deleteButton"  href="/delete/{{$contato->ID}}">Apagar Contato</a>
            <hr>
        @endforeach
    </div>
</div>
@stop

