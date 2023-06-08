@extends('layouts.app')

@section('title', 'edição')
@section('content')

<div class="container">
    <h1>Editar Filme</h1>
    <hr>
    <form action="{{ route('filmes-update',['id'=>$filmes->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{$filmes->nome}}" placeholder="Digite o nome do filme">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="{{$filmes->categoria}}" placeholder="Digite a categoria do filme">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_lancamento">Ano de Lancamento</label>
                <input type="number" class="form-control" name="ano_lancamento" value="{{$filmes->ano_lancamento}}" placeholder="Digite o ano de lançamento">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" name="valor" value="{{$filmes->valor}}" placeholder="Digite o valor do filme">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="Atualizar" >
            </div>
        </div>
    </form>
</div>
@endsection