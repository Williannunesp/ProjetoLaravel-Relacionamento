@extends('layout')

@section('titulo')
    Home
@endsection

@section('cabecalho')
    Relacionamentos
@endsection

@section('conteudo')
    <div class="row">
        <a href="{{ route('tela_nome') }}" class="btn btn-dark">Relacionamento Sexo com Pessoa 1 p/ 1</a>
    </div>
    <div class="row">
        <a href="{{ route('tela_email') }}" class="btn btn-dark mt-2">Relacionamento Pessoa com Email 1 p/ N</a>
    </div>
    <div class="row">
        <a href="{{ route('tela_petel') }}" class="btn btn-dark mt-2">Relacionamento Pessoa com Telefone N p/ N</a>
    </div>
@endsection
