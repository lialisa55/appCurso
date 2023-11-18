<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCat()
    {
        return view('cad_categoria');
    }

    public function index()
    {
        return view('index');
    }
    public function cadastroCat(Request $request)
    {
        //verifica se existe algo na variável nomecategoria
        $registroCat = $request->validate([
            'nomecategoria' => 'string|required'
        ]);
        //Esta linha é que grava o registro no banco
        Categoria::create($registroCat);
        return Redirect::route('index');
    }
    public function showManipulationCategory()
    {
        $registrosCategoria = Categoria::All();

        return view('manipula_categoria', ['registrosCategoria' => $registrosCategoria]);
    }
    public function deletarCategoria(Categoria $registroscategoria)
    {
        $registroscategoria->delete();
        return Redirect::route('index');
    }
    public function buscarCategoriaNome(Request $request)
    {
        $registrosCategoria = Categoria::query();
        $registrosCategoria->when($request->categoria, function ($query, $valor) {
            $query->when('nomecategoria', 'like', ' %' . $valor . '%');
        });
        $registrosCategoria = $registrosCategoria->get();
        return view('manipula_categoria', ['registrosCategoria' => $registrosCategoria]);
        ;
    }
    public function MostrarAlterarCategoria(Categoria $registroscategoria)
    {
        return view('altera_categoria', ['registrosCategoria' => $registroscategoria]);
    }
    public function PutCategoria(Categoria $registroscategoria, Request $request)
    {
        $registrosCat = $request->validate([
            'nomecategoria' => 'string|required'
        ]);
        $registroscategoria->fill($registrosCat);
        $registroscategoria->save();
        return Redirect::route('index');
    }
}
