@extends('layout')

@section('titulo')
    Lista de Sexos
@endsection

@section('cabecalho')
    Sexos Cadastrados
@endsection

@section('conteudo')
    <a href="{{ route('telac_sexo') }}" class="btn btn-dark mb-2">Cadastrar</a>

    <a href="{{ route('home') }}" class="btn btn-dark mb-2 ">Inicio</a>

    <ul class="list-group">
        @foreach ($sexos as $sexo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $sexo->nome }}
                <form method="post" action="/sexo/{{ $sexo->id }}"
                    onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($sexo->nome) }}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </li>
        @endforeach

    </ul>
@endsection
