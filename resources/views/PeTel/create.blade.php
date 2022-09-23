@extends('layout')

@section('titulo')
    Cadastro Nome e Telefone
@endsection

@section('cabecalho')
    <h1>Cadastro Nome e Telefone</h1>
@endsection

@section('conteudo')
    <form action="{{ route('cadastrar_petel') }}" method="post">
        @csrf
        <div class="row d-flex">

            <div class="col col-2">
                <label for="nome" class="mb-2">Nome:
                    <select name="nome" class="form-select" aria-label="Default select example">
                </label>
                <option value=""></option>
                @foreach ($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}"> {{ $pessoa->nome }}</option>
                @endforeach
                </select>
                <a href="{{ route('cadastrar_nome') }}" class="btn btn-dark mt-2">Add Nome</a>
            </div>

            <div class="col col-2">
                <label for="telefone" class="mb-2">Telefone:
                    <select name="telefone" class="form-select" aria-label="Default select example">
                </label>
                <option value=""></option>
                @foreach ($telefones as $telefone)
                    <option value="{{ $telefone->id }}"> {{ $telefone->numero }}</option>
                @endforeach
                </select>
                <a href="{{ route('cadastrar_telefone') }}" class="btn btn-dark mt-2">Add Telefone</a>
            </div>


        </div>
        <button class="btn btn-primary">Salvar</button>

        <div class="row col col-2 mt-5">
            <a href="{{ route('tela_petel') }}" class="btn btn-dark mb-2 ">Voltar</a>
        </div>
    </form>
@endsection
