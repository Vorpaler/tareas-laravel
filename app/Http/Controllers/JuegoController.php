<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Juego;

class JuegoController extends Controller
{


    public function create()
    {
        $categorias = Categoria::All();
        return view('admin.agre-juego', [
            'categorias' => $categorias
        ]);
    }


    public function index()
    {
        $juegos = Juego::paginate(8);
        return view('index', ['juegos' => $juegos]);
    }


    public function admin()
    {
        $juego = Juego::paginate(6);
        return view('admin.juegos', ['juegos' => $juego]);
    }

    public function edit($id)
    {   
        $juego = Juego::find($id);
        return view('admin.edit-juego', ['juego' => $juego]);
    }


    public function update(Request $request, $id)
    { 
        $request->validate([
            'nombre' => 'required|max:255',
            'precio' => ['required', 'min:0'],
            'descripcion' => ['required', 'max:255']
        ]);

        $juego = Juego::find($id);
        $juego->nombre = $request->nombre;
        $juego->precio = $request->precio;
        $juego->descripcion = $request->descripcion;
        $juego->save();

        return redirect()->route('admin.juegos')->with('message', 'El juego se ha modificado correctamente.');
    }

   
    public function destroy($id)
    {
        Juego::findOrFail($id)->delete();

        return redirect()
        ->route('admin.juegos')
        ->with('status', 'El producto se ha eliminado correctamente.');
    }





    public function agre(Request $request)
    {  
        $fotoPath = $request->file('foto')->store('img/');
    
        Juego::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'path_imagen' => $fotoPath
        ]);
    
        return redirect()->route('admin.juegos');
    }
    

}
