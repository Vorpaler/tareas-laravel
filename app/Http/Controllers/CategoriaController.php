<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Juego;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::paginate(8);
        return view('index', ['categorias' => $categorias]);
    }

    public function admin()
    {
        $categorias = Categoria::paginate(8);
        return view('admin.categorias', ['categorias' => $categorias]);
    }

    
    public function edit($id)
    {   
        $categoria = Categoria::find($id);
        return view('admin.edit-categoria', ['categoria' => $categoria]);
    }

    public function update(Request $request, $id)
    { 
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255'
        ]);

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect()->route('admin.categorias')->with('message', 'La categoría se ha modificado correctamente.');
    }

    public function create()
    {
        return view('admin.agre-categoria');
    }

    public function agre(Request $request)
    {  

        Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('admin.categoria');
    }

    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        return redirect()
            ->route('admin.categoria')
            ->with('status', 'La categoría se ha eliminado correctamente.');
    }
}
