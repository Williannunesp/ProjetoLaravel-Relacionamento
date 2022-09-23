@extends('layout')

@section('titulo')
    Cadastro de Telefones
@endsection

@section('cabecalho')
    Cadastro de Telefones
@endsection

@section('conteudo')
    <form action="{{ route('cadastrar_telefone') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="telefone">Numero telefone:</label>
            <input type="text" class="form-control mb-2" name="telefone" id="numerotelefone">
        </div>
        <button class="btn btn-primary">Salvar</button>

        <div class="row col col-2 mt-5">
            <a href="{{ route('tela_telefone') }}" class="btn btn-dark mb-2 ">Voltar</a>

            
        </div>
    </form>
@endsection
