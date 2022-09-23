@extends('layout')

@section('titulo')
    Lista de Nomes e Telefones
@endsection

@section('cabecalho')
    Nomes e Telefones Cadastrados
@endsection

@section('conteudo')
    <a href="{{ route('telac_petel') }}" class="btn btn-dark mb-2">Cadastrar</a>

    <a href="{{ route('home') }}" class="btn btn-dark mb-2 ">Incio</a>

    <ul class="list-group">
        @foreach ($petels as $petel)
            @foreach ($pessoas as $pessoa)
                @foreach ($telefones as $telefone)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nome: {{ $pessoa->nome }}, Telefone: {{ $telefone->numero }}
                        <form method="post" action="/petel/{{ $petel->id }}"
                            onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($petel->pessoa_id) }}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </li>
                @endforeach
            @endforeach
        @endforeach

    </ul>
@endsection
