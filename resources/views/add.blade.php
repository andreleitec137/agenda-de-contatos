@extends('layouts.header')
@section('content')
<div class="col-md-12">
    <div class="container">
        <h1>Adicionar Contato</h1>

        <form  method="POST" id="adicionarContato" action="{{ route('store') }}" > 
                @csrf     
            <!-- CONTATO NOME -->
            <Br>
            <h3>Informações de Contato</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="Nome" class="col-form-label text-md-left">{{ __('Nome') }}*</label>
                        <input id="Nome" type="text" class="form-control @error('Nome') is-invalid @enderror"  value="{{ old('Nome') }}" name="Nome">
                        @error('Nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>Campo Obrigatório</strong>
                            </span>
                        @enderror
                    </div>
                </div>   
            <!-- FIM -->
            <bR>
            <!-- TELEFONE -->
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="Telefone" class="col-form-label text-md-left">{{ __('Telefone') }}*</label>
                        <input id="Telefone" type="text" class="form-control @error('Telefone') is-invalid @enderror" value="{{ old('Telefone') }}" name="Telefone">
                        @error('Telefone')
                            <span class="invalid-feedback" role="alert">
                                <strong>Campo Obrigatório</strong>
                            </span>
                        @enderror
                    </div>
                </div>    
            </div>                               
            <!-- FIM -->
            <bR>
            <!-- EMAIL -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="Email" class="col-form-label text-md-left">{{ __('Email') }}*</label>
                            <input id="Email" type="email" class="form-control @error('Email') is-invalid @enderror"  value="{{ old('Email') }}" name="Email">
                            @error('Email ')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Campo Obrigatório</strong>
                                </span>
                            @enderror
                        </div>
                    </div>            
                </div>        
                
                
            <!-- FIM -->
            <Br><Br>
            <h3>Endereço</h3>
              <!-- CEP -->
              <div class="row">                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cep" class="col-form-label text-md-left">{{ __('CEP') }}*</label>

                                        <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}"  autocomplete="cep" autofocus>

                                        @error('cep')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        <!-- FIM -->

                          <!-- ESTADO -->
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label for="estado" class="col-form-label text-md-left">{{ __('Estado') }}*</label>
                                        <input class="form-control" name="estado" id="estado" value="{{session()->get('estado')}}" readonly="readonly">
                                          
                                          
                                        @error('estado')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                        <!-- FIM -->

                        <!-- CIDADE -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="cidade" class="col-form-label text-md-left">{{ __('Cidade') }}*</label>

                                    <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}"  autocomplete="cidade" readonly="readonly" autofocus>

                                    @error('cidade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Campo Obrigatório</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        <!-- FIM -->

                        <!-- RUA -->
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="logradouro" class="col-form-label text-md-left">{{ __('Logradouro') }}*</label>

                                        <input id="logradouro" type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" value="{{ old('logradouro') }}"  readonly="readonly" autocomplete="logradouro" autofocus>

                                        @error('logradouro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        <!-- FIM -->
                        

                         <!-- BAIRRO -->
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="bairro" class="col-form-label text-md-left">{{ __('Bairro') }}*</label>

                                        <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}"  readonly="readonly" autocomplete="bairro" autofocus>

                                        @error('bairro')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        <!-- FIM -->    

                          <!-- NUMERO -->
                          <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="numero" class="col-form-label text-md-left">{{ __('Número') }}*</label>

                                        <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}"  autocomplete="numero" autofocus>

                                        @error('numero')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        <!-- FIM -->      

                        <!-- COMPLEMENTO -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="complemento" class="col-form-label text-md-left">{{ __('Complemento') }}</label>

                                        <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus>

                                        @error('complemento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Campo Obrigatório</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        <!-- FIM -->   



            <button type="submit" class="btn btn-submit-lista btn-block"  name="action" value="salvar">Adicionar Contato</button>

        </form>
    </div>
</div>


<script>

$("#cep").focusout(function(){
                    var cep = $('#cep').val().replace(/\.|\-/g, '');

                //Início do Comando AJAX
                $.ajax({
                    //O campo URL diz o caminho de onde virá os dados
                    //É importante concatenar o valor digitado no CEP
                    url: 'https://viacep.com.br/ws/'+cep+'/json/unicode/',
                    //Aqui você deve preencher o tipo de dados que será lido,
                    //no caso, estamos lendo JSON.
                    dataType: 'json',
                    //SUCESS é referente a função que será executada caso
                    //ele consiga ler a fonte de dados com sucesso.
                    //O parâmetro dentro da função se refere ao nome da variável
                    //que você vai dar para ler esse objeto.
                    success: function(resposta){
                        //Agora basta definir os valores que você deseja preencher
                        //automaticamente nos campos acima.

                        $("#logradouro").val(resposta.logradouro);
                        $("#complemento").val(resposta.complemento);
                        $("#bairro").val(resposta.bairro);                       
                        $("#cidade").val(resposta.localidade);
                        $("#estado").val(resposta.uf);
                        if($("#logradouro").val() == "" || $("#logradouro").val() == null)
                        {
                            $("#logradouro").prop("readonly", false);                            
                        }
                        if($("#bairro").val() == "" || $("#bairro").val() == null)
                        {
                            $("#bairro").prop("readonly", false);                            
                        }
                        //Vamos incluir para que o Número seja focado automaticamente
                        //melhorando a experiência do usuário
                        $("#numero").focus();
                    }
                });                
            });
</script>
@stop

