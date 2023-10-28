<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    //abri o formulario de cadastro
    public function showFormAula(){
        return view('cad_aula');
    }
    public function cadastroAula(Request $request){
        //verifica se existe algo na variável nomecategoria
        $registroAula = $request->validate([
            'idcurso' => 'numeric|required',
            'tituloaula'=> 'string|required',
            'urlaula'=> 'string|required',
        ]);
        //Esta linha é que grava o registro no banco
        Aula::create($registroAula);
        return Redirect::route('index');
    }
    public function showManipulaAula(){
        $registroAula = Aula::All();

        return view('manipula_aula', ['registrosAula' => $registroAula]);
    }
    public function deletarAula(Aula $registrosAula){
        $registrosAula->delete();
        return Redirect::route('index');
    }
}
