<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         // Verificar si el usuario es administrador
         if (auth()->user()->Permisos()) {
            $vehiculos = Vehiculos::all();
            return view('admin', ['vehiculos' => $vehiculos]);
        }

        // Si no es administrador, redirigir a MuroIndex
        return redirect()->route('MuroIndex');
    }
}
