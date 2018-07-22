<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Aluno;

class AlunosController extends Controller
{
    public function Index(){
        $alunos = Aluno::get();
        return view('alunos.lista', ['alunos'=>$alunos]);
    }

    public function Cadastro(){
        return view('alunos.formulario');
    }

    public function Salvar(Request $request){
        $alunos = new Aluno();
        $alunos->create($request->all());
        \Session::flash('sucesso', 'Aluno cadastrado com sucesso!');
        return Redirect::to('cadastro');
    }

    public function Editar($id){
        $aluno = Aluno::findOrFail($id);
        return view('alunos.formulario',['aluno'=>$aluno]);
    }

    public function Deletar($id){
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        \Session::flash('sucesso', 'Aluno deletado com sucesso!');
        return Redirect::to('lista');
    }

    public function Atualizar($id, Request $request){
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        \Session::flash('sucesso', 'Aluno atualizado com sucesso!');
        return Redirect::to($aluno->id.'/editar');
    }
}
