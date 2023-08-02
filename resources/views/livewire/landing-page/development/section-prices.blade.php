 <!-- Precios -->
 <section id="price-info" class="price-info">
     <h2>Precios</h2>
     <!-- Agrega aquí las opciones de precios y promociones -->
     <p>
         {{ $price_info }}
     </p>
     <div class="row justify-content-center">
         @foreach ($prices as $index => $price)
             <div wire:key="{{ $price->id }}" class="col-md-6">
                 <div class="card card-prices">
                     <img src="{{ $price->image }}" alt="" class="card-img-top">
                     <div class="card-body">
                         <h5 class="card-title">
                             {{ $price->lot_type }}: {{ $price->price }}
                         </h5>
                         <div>
                             @if (count($price->financings) > 0)
                                 <p class="card-text"><b>Financiamiento</b></p>
                                 <ul>
                                     @foreach ($price->financings as $financing)
                                         <li wire:key="{{ $financing->id }}">{{ $financing->period . " " . $financing->price }}</li>
                                     @endforeach

                                 </ul>
                             @endif

                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>

 </section>
