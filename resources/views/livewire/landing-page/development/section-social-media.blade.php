 <!-- Redes sociales -->
 <section id="social-media">
     <h2>Síguenos en redes sociales</h2>
     <!-- Agrega aquí los enlaces a las redes sociales -->
     <div class="social-icons">
         @foreach ($social_medias as $social_media)
             <a wire:key="{{ $social_media['id'] }}" href="{{ $social_media['url'] }}" target="_blank"
                 title="{{ $social_media['name'] }}"><img src="{{ $social_media['icon'] }}" alt="{{ $social_media["name"] }}"></a>
         @endforeach
         <!-- Agrega más enlaces de redes sociales según sea necesario -->
     </div>
 </section>
