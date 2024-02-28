<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

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
    return view('listarAluno')->with('aluno',$aluno);
    //return response()->json($aluno);
}

}
