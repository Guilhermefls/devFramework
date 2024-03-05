<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class AlunoController extends Controller
{
    public function listar()
{
    $alunos = Aluno::all();
    return view('listarAlunos')->with('alunos',$alunos);
    //return response()->json($alunos);
}

public function listarID($id)
{
    $aluno = Aluno::find($id);
    if($aluno){
        return view('visualizarAlunos')->with('aluno',$aluno);
    }
    else{
        return redirect('/alunos')->withErrors(['erro'=>'Aluno não encontrado']);
    }
    //return response()->json($aluno);


}
public function store(Request $request){
    $aluno=new Aluno;
    $aluno->nome=$request->nome;
    $aluno->dataNascimento=$request->dataNascimento;
    $aluno->email=$request->email;
    $aluno->curso=$request->curso;
    $aluno->save();

    reutrn response()->json($aluno,201);


}

}
