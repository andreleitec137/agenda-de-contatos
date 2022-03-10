@extends('layouts.header')

@section('content')
<div class="col-md-12">
    <div class="bannerAgenda">
        <h1>Agenda de Contatos</h1>
    </div>
    <div class="container">       
        <Br><br>
        @if(is_null($contatos) || $contatos->count() == 0)
        <div style="text-align: center">
            <h3>Ainda não há contatos na sua lista. <a href="/add">Clique aqui para adicionar</a></h3>
        </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('success-delete'))
            <div class="alert alert-danger">
                {{ session()->get('success-delete') }}
            </div>
        @endif
        @foreach($contatos as $contato)
        <div class="col-md-12 shadow-sm backgroundCartaoContato">
            <h3>{{$contato->Nome}} </h3><p></p>
            <h4>Informações de Contato</h4>
            <span>Telefone: <a href="tel: {{$contato->Telefone}}">{{$contato->Telefone}}</a> </span><br>
            <span>Email: <a href="mailto:{{$contato->Email}}">{{$contato->Email}}</a> </span><br><br>

            <h4>Endereço</h4>
            <span>{{$contato->rua}}, {{$contato->numero}}, {{$contato->bairro}}, {{$contato->cidade}}, {{$contato->estado}}, {{$contato->cep}}</span>
            @if($contato->complemento != null || $contato->complemento != "")
            <br>
            <span>Complemento: {{$contato->complemento}}</span>         
            @endif
            <Br>
            <a target="_blank" href="https://www.google.com/maps/dir/{{$contato->rua}},+{{$contato->numero}}+-+#{{$contato->bairro}},+{{$contato->cep}},">Ver endereço no GoogleMaps</a>
            <Br><br>
            <a class="editButton" href="/edit/{{$contato->ID}}">Editar Contato</a>
            <a class="deleteButton"  href="/delete/{{$contato->ID}}">Apagar Contato</a>
        </div>
        @endforeach
    </div>
</div>
@stop

