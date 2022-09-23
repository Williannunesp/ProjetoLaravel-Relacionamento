@extends('layout')

@section('titulo')
    Cadastro de Email
@endsection

@section('cabecalho')
    <h1>Cadastro de Email</h1>
@endsection

@section('conteudo')
    <form action="{{ route('cadastrar_email') }}" method="post">
        @csrf
        <div class="row d-flex">
            <div class="col col-5">
                <label for="email">Email:</label>
                <input type="email" class="form-control mb-2" name="email" id="email">
            </div>

            <div class="col col-2">
                <label for="nome" class="mb-2">Nome:
                    <select name="nome" class="form-select" aria-label="Default select example">
                </label>
                <option value=""></option>
                @foreach ($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}"> {{ $pessoa->nome }}</option>
                @endforeach


                </select>
            </div>

            <div class="col col-2 mt-4">
                <a href="{{ route('cadastrar_nome') }}" class="btn btn-dark mb-2">Add Nome</a>
            </div>
        </div>
        <button class="btn btn-primary">Salvar</button>

        <div class="row col col-2 mt-5">
            <a href="{{ route('tela_email') }}" class="btn btn-dark mb-2 ">Voltar</a>
        </div>
    </form>
@endsection
