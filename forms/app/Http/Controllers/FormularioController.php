<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormularioController extends Controller
{
    public function processarFormulario(Request $request)
    {
        $dados = $request->all();
        return view('resultado', compact('dados'));
    }
}
