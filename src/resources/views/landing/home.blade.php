@extends('landing.layouts.landing')

@section('title', 'Inicio - Horizonte Azul Viajes')

@section('header')
    <h1>Tu próximo horizonte te espera</h1>
@endsection

@section('content')
    <img class="horizonte-azul-logo" src="{{ asset('assets/images/horizonte_azul_logo.png') }}" alt="Horizonte Azul Logo">

    <p class="home-text">
        Viajes a medida, destinos únicos y atención personalizada.
        Descubre tu próximo horizonte con Horizonte Azul Viajes.
    </p>

    <p><a class="home-btn" href="{{ route('services') }}">Ver destinos</a></p>
@endsection