@extends('layout')

@section('titulo')
    Cadastro de Sexos
@endsection

@section('cabecalho')
    Cadastro de Sexo
@endsection

@section('conteudo')
    <form action="{{ route('cadastrar_sexo') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome Sexo</label>
            <input type="text" class="form-control mb-2" name="nome" id="nome">
        </div>
        <button class="btn btn-primary">Salvar</button>

        <div class="row col col-2 mt-5">
            <a href="{{ route('telac_nome') }}" class="btn btn-dark mb-2 ">Voltar</a>
        </div>
    </form>
@endsection
