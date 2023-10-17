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

    public function index(){
        return view('index');
    }
    public function cadastroCurso(Request $request){
        //verifica se existe algo na variável nomecategoria
        $registroCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'string|required',
            'valor' => 'string|required'
        ]);
        //Esta linha é que grava o registro no banco
        Curso::create($registroCurso);
        return Redirect::route('index');
    }
}
