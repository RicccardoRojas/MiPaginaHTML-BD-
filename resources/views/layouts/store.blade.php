<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Porsche Mexico</title>

        @vite(['resources/js/app.js'])
    </head>
    <body>
        @include('partials.navegacionprin')
        {{-- Inyectar secciones de codigo --}}

        @include('store.storeporche')
        @include('chat.chatbot')
        @include('partials.contacto')        
    </body>
</html>