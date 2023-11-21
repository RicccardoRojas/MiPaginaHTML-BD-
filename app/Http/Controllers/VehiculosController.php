<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;
use Illuminate\Support\Facades\Storage;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

          // Verificar si el usuario es administrador
          if (auth()->user()->Permisos()) {
            $vehiculos = Vehiculos::find($id);
            return view('vehiculos.edit',['vehiculos' => $vehiculos]);
        }

        return redirect()->route('MuroIndex');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'etiqueta' => 'required|string|max:255',
            'nueva_imagen' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:4048',
        ]);

        $vehiculo = Vehiculos::findOrFail($id);

        $vehiculo->update([
            'nombre' => $request->nombre,
            'modelo' => $request->modelo,
            'etiqueta' => $request->etiqueta,
        ]);

        if ($request->hasFile('nueva_imagen')) {
            if ($vehiculo->imagen) {
                Storage::disk('public')->delete($vehiculo->imagen);
            }

            $imagenPath = $request->file('nueva_imagen')->store('uploads', 'public');
            $vehiculo->update(['imagen' => $imagenPath]);
        }

        return redirect()->route('AdminIndex')->with('success', 'Cambios guardados correctamente.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
