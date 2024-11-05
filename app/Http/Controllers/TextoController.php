<?php

namespace App\Http\Controllers;

use App\Models\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'texto' => 'required|string|max:255',
        ]);

        Texto::create([
            'texto' => $request->input('texto'),
        ]);

        return redirect()->route('formulario.hola')->with('mensaje', 'Texto guardado correctamente.');
    }

    public function index()
    {
        $textos = Texto::all();

        return view('addPerson', compact('textos'));
    }
}
