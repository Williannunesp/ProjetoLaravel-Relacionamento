@extends('layout')

@section('titulo')
    Lista de Telefones
@endsection

@section('cabecalho')
    Telefones Cadastrados
@endsection

@section('conteudo')
    <a href="{{ route('telac_sexo') }}" class="btn btn-dark mb-2">Cadastrar</a>

    <a href="{{ route('home') }}" class="btn btn-dark mb-2 ">inicio</a>

    <ul class="list-group">
        @foreach ($telefones as $telefone)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $telefone->numero }}
                <form method="post" action="/telefone/{{ $telefone->id }}"
                    onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($telefone->numero) }}?')">
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
