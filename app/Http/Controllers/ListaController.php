<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateResquest;
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
    
    public function store(StoreUpdateResquest $request)
    {
        $dados = $request->all();
        Lista::create($dados);
        return redirect()->route('lista.index');

    }

    public function edit($id)
    {
       
        if(!$listas=Lista::find($id));
        {
            return redirect()->back();
        }

       return view ('admin.lista.edit', compact('lista'));
        
        
    }

    public function update(StoreUpdateResquest $request, $id)
    {
        
      }
    
}
