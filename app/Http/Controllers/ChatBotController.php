<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatBot;

class ChatBotController extends Controller
{
    public function index(Request $request)
    {
    $pregunta = $request->input('pregunta');
    $respuesta = $this->generarRespuesta($pregunta);

    return $respuesta;
    }

    private function generarRespuesta($pregunta)
    {

    $respuesta = ChatBot::where('preguntas', 'LIKE', '%' . $pregunta . '%')->pluck('respuestas')->first();

    if (!$respuesta) {
        $respuesta = "Lo siento, no tengo una respuesta para esa pregunta en este momento.";
    }

    return $respuesta;

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
    public function show(string $pregunta)
    {
        $respuestas = ChatBot::where('preguntas', 'LIKE', '%' . $pregunta . '%')
            ->pluck('respuestas');

        return view('MuroChat', ['respuestas' => $respuestas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
