<div>
    <h4>Lista de Alunos Cadastrados</h4>
    <a href="{{url('cadastro')}}">Novo Aluno</a>
</div>
<br>
@if(Session::has('sucesso'))
        <div>
            <span style="color:green">{{ Session::get('sucesso') }}</span>
        </div>
        <br> 
        @endif
<table>
    <thead>
        <tr>
            <th>
                #
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
                {{ $item->id }}
            </td>
            <td>
                {{ $item->nome }}
            </td>
            <td>
                <a href="{{$item->id}}/editar">Editar</a>
                {!!Form::open(['action'=>['AlunosController@Deletar', $item->id], 'method' => 'DELETE', 'style'=> 'display:inline']) !!}                
                {!! Form::submit('Excluir') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
