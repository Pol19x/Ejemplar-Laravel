@extends('landing.layouts.landing')

@section('title', 'Sobre nosotros')

@section('header')
    <h1>Sobre nosotros</h1>
    <p><em>Viajamos contigo hacia tu próximo horizonte.</em></p>
@endsection

@section('content')
    <section class="about-section">
        <h2>Quiénes somos</h2>
        <p class="about-text">
            Horizonte Azul Viajes es una agencia que diseña viajes a medida.
            Nos encargamos de vuelos, alojamiento y excursiones para que
            tú solo tengas que disfrutar.
        </p>
    </section>

    <section class="about-section">
        <h2>Nuestros valores</h2>
        <div class="cards-container">
            <div class="card">
                <h2>Cercanía</h2>
                <p>Te atendemos de tú a tú.</p>
            </div>
            <div class="card">
                <h2>Confianza</h2>
                <p>Precios claros y asistencia en todo momento.</p>
            </div>
            <div class="card">
                <h2>Pasión</h2>
                <p>Viajamos, por eso sabemos lo que recomendamos.</p>
            </div>
        </div>
    </section>
@endsection