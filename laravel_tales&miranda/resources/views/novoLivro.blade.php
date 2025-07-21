@extends('layout')
@section('content')
<div>
    <form action="{{route('gravarNovoLivro')}}" method='POST'>
        @csrf
        <div>
            <label for='nomeLivro'>Digite o nome do livro:</label>
            <input name='nomeLivro' type="text">
        </div>

        <div>
            <label for='autorLivro'>Qual o nome do Autor? </label>
            <input name='autorLivro' type="text">
        </div>
        
        <button type='submit'>Adicionar</button>

    </form>
</div>
@endsection