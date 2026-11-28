@props(['title', 'price', 'days', 'url', 'image' => 'servicios_logo.png'])
<div class="card">
    <h2>{{ $title }}</h2>
    <img src="{{ asset('assets/images/' . $image) }}" alt="{{ $title }}">
    <p class="card-desc">{{ $slot }}</p>
    <p>{{ $price }} € · {{ $days }} días</p>
    <a href="{{ $url }}" target="_blank">Ver ciudad</a>
</div>