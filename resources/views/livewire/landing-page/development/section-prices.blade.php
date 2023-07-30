 <!-- Precios -->
 <section id="price-info" class="price-info">
    <h2>Precios</h2>
    <!-- Agrega aquí las opciones de precios y promociones -->
    <p>
        {{ $price_info }}
    </p>
    <p>
        Precio base por m2: {{ $price_base }}
    </p>
    <p>
        Precios adicionales:
    </p>
    <ul>
        @foreach ($price_lotTypes as $price_lotType)
            <li wire:key="{{ $price_lotType["id"] }}">{{ $price_lotType["lot_type"] }}: {{ $price_lotType["price"] }}</li>
        @endforeach
    </ul>
</section>
