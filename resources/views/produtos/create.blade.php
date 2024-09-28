@extends('layouts.app')

@section('content')
<h1>Cadastro de Produtos</h1>
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="preco">Preço</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection
