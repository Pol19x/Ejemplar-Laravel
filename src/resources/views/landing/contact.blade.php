@extends('landing.layouts.landing')

@section('title', 'Contacto - Horizonte Azul Viajes')

@section('header')
    <h1>Contacto</h1>
    <p>Cuéntanos qué viaje tienes en mente y te responderemos lo antes posible.</p>
@endsection

@section('content')
    <form class="contact-form" action="#" method="post">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="destino">Destino de interés</label>
        <input type="text" id="destino" name="destino">

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar</button>
    </form>
@endsection