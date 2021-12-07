<?php

namespace App\Http\Controllers;

use App\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index()
    {
        $listas =Lista::paginate();
        return view ('admin.lista.index', compact('listas'));
        
    }

    public function create()
    {
        return view ('admin.lista.create');
    }
    
    public function store(Request $request)
    {
        $dados = $request->all();
        Lista::create($dados);
        return redirect()->route('lista.index');

    }
}
