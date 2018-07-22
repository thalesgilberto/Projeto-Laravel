@if(Request::is('*/editar'))
<h4>Editar Aluno: {{ $aluno->nome }}</h4>
{!! Form::model($aluno, ['method'=>'PACTH', 'action' => ['AlunosController@Atualizar', $aluno->id]]) !!}
@method('PATCH')
@else
<h4>Cadastrar de Aluno</h4>
{!! Form::open(['action'=>'AlunosController@Salvar', 'method' => 'POST']) !!}
@endif
<div>      
        @if(Session::has('sucesso'))
        <div>
            <span style="color:green">{{ Session::get('sucesso') }}</span>
        </div>
        <br> 
        @endif
             
    {!! Form::label('nome', 'Nome do Aluno*') !!}
    <div>{!! Form::input('text', 'nome', null, ['required']) !!}</div>
    <br>
    {!! Form::label('cpf', 'CPF*') !!}
    <div>
            {!! Form::input('text', 'cpf', null, ['required', 'placeholder'=>'000.000.000-00']) !!}
    </div>
    <br>   
    {!! Form::label('sexo', 'Sexo*') !!}    
    <div>            
            {!!Form::select('sexo', ['M' => 'Masculino', 'F' => 'Feminino'], null , ['placeholder' => 'Selecione', 'required']);     !!}        
    </div>
    <br>    
    {!! Form::label('data_nascimento', 'Data de Nascimento*') !!}
    <div>
            {!! Form::input('date', 'data_nascimento', null, ['required']) !!}
    </div>
    <br>
    {!! Form::label('endereco', 'Endereço*') !!}  
    <div>
            {!! Form::input('text', 'endereco', null, ['required']) !!}
    </div>
    <br>
    {!! Form::label('email', 'Email*') !!}    
    <div>
            {!! Form::input('text', 'email', null, ['required', 'placeholder'=>'exemplo@exemplo.com']) !!}
    </div>
    <br>
    <div>
            {!! Form::submit('Salvar') !!}
    </div>
    <br>
    <div>
        <a href="{{ url('/lista') }}">Volta a Lista</a>
    </div>
</div>
{!! Form::close() !!}
