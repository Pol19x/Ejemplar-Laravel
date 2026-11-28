@extends('landing.layouts.landing')

@section('title', 'Servicios')

@section('header')
    <h1>Servicios</h1>
@endsection

@section('content')
    <div class="cards-container">
        <x-card title="Roma" image="roma.png" price="450" days="4" url="https://www.turismoroma.it">
            Hotel céntrico y visita guiada al Coliseo.
        </x-card>

        <x-card title="París" image="paris.png" price="620" days="5" url="https://parisjetaime.com">
            Crucero por el Sena y entrada a la Torre Eiffel.
        </x-card>

        <x-card title="Lisboa" image="lisboa.png" price="380" days="3" url="https://www.visitlisboa.com">
            Hotel y excursión a Sintra.
        </x-card>
    </div>
@endsection