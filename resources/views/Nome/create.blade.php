@extends('layout')

@section('titulo')
    Cadastro de Nomes
@endsection

@section('cabecalho')
    <h1>Cadastro de Nomes</h1>
    
@endsection

@section('conteudo')
    <form action="{{ route('cadastrar_nome') }}" method="post">
        @csrf
        <div class="row d-flex">
            <div class="col col-5">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control mb-2" name="nome" id="nome">
            </div>

            <div class="col col-2">
                <label for="sexo" class="mb-2">Sexo:
                    <select name="sexo" class="form-select" aria-label="Default select example">
                </label>
                <option value=""></option>
                @foreach ($sexos as $sexo)
                    <option value="{{ $sexo->id }}"> {{ $sexo->nome }}</option>
                @endforeach


                </select>
            </div>

            <div class="col col-2 mt-4">
                <a href="{{ route('cadastrar_sexo') }}" class="btn btn-dark mb-2">Add Sexo</a>
            </div>
        </div>
        <button class="btn btn-primary">Salvar</button>

        <div class="row col col-2 mt-5">
            <a href="{{ route('tela_nome') }}" class="btn btn-dark mb-2 ">Voltar</a>
        </div>
    </form>
@endsection
