@extends('layouts/app')

@section('title', 'Laravel 12')

@push('css')
    <style>
        body{
            background-color: rgb(245, 247, 249);
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-2xl font-bold my-6">Bienvenido al Blog</h1>

        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                Título de la alerta
            </x-slot>
            Contenido de la arlerta.
        </x-alert2>

        <p>Hola Mundo</p>
    </div>
@endsection
    