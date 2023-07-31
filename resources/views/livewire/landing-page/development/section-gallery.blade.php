<!-- Galería -->
<section id="gallery">
    <h2>Galería</h2>
    <!-- Agrega aquí una galería de imágenes atractivas -->
    <div class="gallery">
        @foreach ($photos as $index => $item)
            <div class="row" style="margin: 0">
                @foreach ($photos[$index] as $photo)
                    <div class="col-md">
                        <img wire:key="{{ $photo->id }}" src="{{ $photo->photo }}" alt="" style="width:100%">
                    </div>
                @endforeach
            </div>
            <br>
        @endforeach


    </div>
</section>
