<!-- Galería -->
<section id="gallery">
    <h2>Galería</h2>
    <!-- Agrega aquí una galería de imágenes atractivas -->
    <div class="gallery">
        @foreach ($photos as $photo)
            <img wire:key="{{ $photo['id'] }}" src="{{ $photo['photo'] }}" alt="" style="width:100%">
        @endforeach

    </div>
</section>
