@extends('layouts.app')

@section('title', 'criação')
@section('content')

<div class="container">
    <h1>Adicionando um novo Filme</h1>
    <hr>
    <form action="{{ route('filmes-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do filme">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do filme">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_lancamento">Ano de Lancamento</label>
                <input type="number" class="form-control" name="ano_lancamento" placeholder="Digite o ano de lançamento">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite o valor do filme">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" >
            </div>
        </div>
    </form>
</div>
@endsection