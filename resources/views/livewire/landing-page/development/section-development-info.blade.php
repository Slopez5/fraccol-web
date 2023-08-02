 <!-- Información del fraccionamiento -->
 <section id="development-info" class="fraccionamiento-info">
     <h2>Información del Fraccionamiento</h2>
     <p>
         {{ $welcome_info }}
     </p>
     <p>
         Características destacadas:
     </p>
     <div class="card-container">
         @foreach ($outstanding_features as $feature)
             <div class="card card-development-info" wire:key="{{ $feature->id }}">
                 <img src="{{ $feature->image }}" class="card-img-top" alt="">
                 <div class="card-body">
                     <h5 class="card-title">{{ $feature->name }}</h5>
                     <p class="card-text"> {{ $feature->description }}</p>
                 </div>
             </div>
         @endforeach
     </div>

     <p>
         {{ $footer_info }}
     </p>
 </section>
