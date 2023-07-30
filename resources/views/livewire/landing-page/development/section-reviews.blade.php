<!-- Reseñas -->
<section id="reviews">
    <h2>Reseñas</h2>
    <!-- Agrega aquí testimonios o reseñas de clientes -->
    @foreach ($reviews as $review)
        <div wire:key="{{ $review["id"] }}" class="review">
            <!-- Agregar imagen de review 1 -->
            <h3>{{ $review["name"] }}</h3>
            <p>{{ $review["review"] }}</p>
        </div>
    @endforeach
</section>
