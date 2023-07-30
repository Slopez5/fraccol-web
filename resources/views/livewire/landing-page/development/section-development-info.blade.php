 <!-- Información del fraccionamiento -->
 <section id="development-info" class="fraccionamiento-info">
     <h2>Información del Fraccionamiento</h2>
     <p>
        {{ $welcome_info }}
     </p>
     <p>
         Características destacadas:
     </p>
     <ul>
        @foreach ($outstanding_features as $feature)
        <li wire:key="{{ $feature["id"] }}">{{ $feature["name"] }}</li>
        @endforeach
     </ul>
     <p>
         {{ $footer_info }}
     </p>
 </section>
