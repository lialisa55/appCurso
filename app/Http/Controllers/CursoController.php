<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    //abri o formulario de cadastro
    public function showFormCurso(){
        return view('cad_curso');
    }
    public function cadastroCurso(Request $request){
        //verifica se existe algo na variável nomecategoria
        $registroCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'numeric|required',
            'idcategoria' => 'numeric|required',
            'valor' => 'numeric|required'
        ]);
        //Esta linha é que grava o registro no banco
        Curso::create($registroCurso);
        return Redirect::route('index');

    }
    public function showManipulaCurso(){
        $registroCurso = Curso::All();

        return view('manipula_curso', ['registrosCurso' => $registroCurso]);
    }
    public function deletarCurso(Curso $registroscurso){
        $registroscurso->delete();
        return Redirect::route('index');
    }
    public function MostrarAlterarCurso(Curso $registroscurso)
    {
        return view('altera_curso', ['registros' => $registroscurso]);
    }
    public function PutCurso(Curso $registroscurso, Request $request)
    {
        $registrosCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'valor' => 'numeric|required',
            'idcategoria' => 'required'
        ]);
        $registroscurso->fill($registrosCurso);
        $registroscurso->save();
        return Redirect::route('index');
    }
}
