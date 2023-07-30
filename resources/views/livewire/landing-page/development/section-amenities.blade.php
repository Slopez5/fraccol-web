 <!-- Amenidades -->
 <section id="amenities">
    <h2>Amenidades</h2>
    <!-- Agrega aquí una lista de amenidades o iconos ilustrativos -->
    <div class="amenidades-container">

        @foreach ($amenities as $amenity)
        <div wire:key="{{ $amenity["id"] }}" class="amenidad">
            <!-- Agregar imagen de amenidad -->
            <h3>{{ $amenity["name"] }}</h3>
            <p>{{ $amenity["description"] }}</p>
        </div>
        @endforeach
    </div>
</section>
