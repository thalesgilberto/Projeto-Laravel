<table>
    <thead>
        <tr>
            <th>
                Nome
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $item)    
        <tr>
            <td>
                {{ $item->nome }}
            </td>
            <td>
                <a href="{{$item->id}}/editar">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
