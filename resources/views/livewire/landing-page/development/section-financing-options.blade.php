 <!-- Financiamientos -->
 <section id="financing-options" class="financing-options">
     <h2>Financiamientos</h2>
     <!-- Agrega aquí detalles sobre las opciones de financiamiento -->
     <p>
         {{ $financing_info }}
     </p>
     <p>
         Precio base por m2: {{ $financing_price_base }}
     </p>
     <p>Financiamientos adicionales</p>
     <ul>
         @foreach ($financing_lot_types as $financing_lot_type)
             <li wire:key="{{$financing_lot_type["id"] }}">Incremento por año de financiamiento {{ $financing_lot_type["lot_type"] }}: {{ $financing_lot_type["price"] }}</li>
         @endforeach

     </ul>
 </section>
