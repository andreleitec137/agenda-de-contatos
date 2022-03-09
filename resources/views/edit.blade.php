@extends('layouts.header')

@section('content')
<div class="col-md-12">
    <div class="container">
        <h1>Adicionar Contato</h1>
        <form method="POST" id="editaCotnato" action="{{ route('edit') }}" > 
        @csrf    
            @foreach($user as $user)
            <!-- CONTATO NOME -->
            <input id="ID" type="hidden" value="{{$user->ID}}" name="ID">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Nome">Nome do Contato*</label>
                        <input id="Nome" type="text" value="{{$user->Nome}}" class="form-control @error('Nome') is-invalid @enderror" name="Nome">
                        @error('Nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $Nome  }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>   
            </div>                     
            <!-- FIM -->
            <bR>
            <!-- TELEFONE -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Telefone">Telefone*</label>
                        <input id="Telefone" type="text"   value="{{$user->Telefone}}" class="form-control @error('Telefone') is-invalid @enderror" name="Telefone">
                        @error('Telefone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $Telefone  }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>    
            </div>                               
            <!-- FIM -->
            <bR>
            <!-- CONTATO NOME -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Email">Email*</label>
                            <input id="Email" type="text" value="{{$user->Email}}" class="form-control @error('Email') is-invalid @enderror" name="Email">
                            @error('Email ')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $contatoEmail_1  }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>            
                </div>        
                
                
            <!-- FIM -->

            <button type="submit" class="btn btn-submit-lista btn-block"  name="action" value="salvar">Atualizar Contato </button>
        @endforeach
        </form>
    </div>
</div>
@stop

