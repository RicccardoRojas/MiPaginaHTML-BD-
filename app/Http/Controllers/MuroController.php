<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculos;

class MuroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $vehiculos = Vehiculos::all();
        return view('principal', ['vehiculos' => $vehiculos]);
    }
}
