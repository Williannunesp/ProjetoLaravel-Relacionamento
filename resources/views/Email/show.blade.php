@extends('layout')

@section('titulo')
    Lista de Email
@endsection

@section('cabecalho')
    Email com nomes
@endsection

@section('conteudo')
    <a href="{{ route('telac_email') }}" class="btn btn-dark mb-2">Cadastrar</a>

    <a href="{{ route('home') }}" class="btn btn-dark mb-2 ">Inicio</a>

    <ul class="list-group">
        @foreach ($emails as $email)
            @foreach ($pessoas as $pessoa)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nome: {{ $pessoa->nome }}, Email: {{ $email->email }}
                    <form method="post" action="/email/{{ $email->id }}"
                        onsubmit="return confirm('tem certeza que deseja remover {{ addslashes($email->email) }}?')">
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
