@extends('layout')

@section('titulo')
    Lista de Nomes
@endsection

@section('cabecalho')
    Nomes com sexo
@endsection

@section('conteudo')
    <a href="{{ route('telac_nome') }}" class="btn btn-dark mb-2">Cadastrar</a>

    <a href="{{ route('home') }}" class="btn btn-dark mb-2 ">Inicio</a>

    <ul class="list-group">
        @foreach ($nomes as $nome)
            @foreach ($sexos as $sexo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nome: {{ $nome->nome }}, Sexo: {{ $sexo->nome }}
                    <form method="post" action="/nome/{{ $nome->id }}"
                        onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($nome->nome) }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </li>
            @endforeach
        @endforeach

    </ul>
@endsection
