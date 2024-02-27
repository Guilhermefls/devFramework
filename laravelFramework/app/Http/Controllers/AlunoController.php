<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
{
    $alunos = Aluno::all();
    return response()->json($alunos);
}

public function listarID($id)
{
    $aluno = Aluno::find($id);
    return response()->json($aluno);
}

}
