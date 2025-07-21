@extends("layout")
@section("content")
<div>
    @if(session()->get('danger'))
        <div>
            {{session()->get('danger')}}
        </div><br />
    @elseif(session()->get('success'))
        <div>
            {{session()->get('success')}}
        </div><br />
    @endif

    <div>
        <h5>Empréstimo de Obras</h5>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dados as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nomeLivro}}</td>
                    <td>{{$item->notaLivro}}</td>
                    <td>
                        <a href="/livro/editar/{{$item->id}}">Editar</a>
                    </td>
                    <td>
                        <a href="/livro/apagar/{{$item->id}}" onclick="return confirm('Mas você está certo disso?');">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection