 <!-- Mapa con la ubicación -->
 <section id="location">
     <h2>Ubicación</h2>
     <!-- Agrega aquí el mapa interactivo -->
     <div id="map" class="location-map" style="height: 300px">
         <!-- Agrega aquí el mapa interactivo o una imagen del mapa -->

     </div>
     <div class="location-details">
         <h3>Dirección</h3>
         <p>{{ $name }}</p>
         <p>{{ $address }}</p>
         <p>{{ $city_country }}</p>

         <h3>Atracciones Cercanas</h3>
         <ul>
             @foreach ($nearby_attractions as $nearby_attraction)
                 <li wire:key="{{ $nearby_attraction['id'] }}">{{ $nearby_attraction['name'] }}</li>
             @endforeach
         </ul>

         <h3>Cómo Llegar</h3>

         <p>{{ $directions }}</p>
     </div>
 </section>

 <script>
     function initMap() {
         // The location of Uluru,
         const development = {
             lat: {{ $lat }},
             lng: {{ $lon }}
         };
         // The map, centered at Uluru
         const map = new google.maps.Map(document.getElementById("map"), {
             zoom: 14,
             center: development,
         });
         // The marker, positioned at Uluru
         const marker = new google.maps.Marker({
             position: development,
             map: map,
             title: "{{ $name }}"
         });
     }

     document.addEventListener('livewire:init', function() {
         initMap();
     });
 </script>
