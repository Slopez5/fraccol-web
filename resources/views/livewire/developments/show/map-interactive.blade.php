<div>
    <object id="blueprint" data="{{ asset('images/planos/El_encanto_2.svg') }}" type="image/svg+xml">
    </object>
</div>

@script
    <script>
         object = document.getElementById("blueprint");
         svgDocument = object.contentDocument;
         lotes = svgDocument.getElementsByClassName("lote");

        for (let i = 0; i < lotes.length; i++) {
            lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
        }

        for (let i = 0; i < lotes.length; i++) {
            lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
            lotes[i].addEventListener('mouseleave', function() {
                lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
            });

            lotes[i].addEventListener('mouseover', function() {
                lotes[i].setAttribute("style", "fill:aqua; opacity: 0.5;");
            });

            lotes[i].addEventListener('click', function() {
                $wire.dispatch('selectLote',
                    {
                        lote: {
                            id: lotes[i].id,
                            area: lotes[i].getAttribute('data-area'),
                        },
                    }
                );
            });
        };
    </script>
@endscript
