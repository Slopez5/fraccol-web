<div class="row justify-content-center">
    @foreach ($places as $index => $place)
        <div wire:key="{{$index}}" class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="{{$place["delay"]}}">
            <div class="small-category-2">
                <div class="small-category-2-thumb img-{{$index}}">
                    <a href="{{route('propertyList')}}"><img
                            src="{{ asset($place['image']) }}" alt=""></a>
                </div>
                <div class="sc-2-detail">
                    <h4 class="sc-jb-title"><a href="{{route('propertyList')}}">{{$place["place"]}}</a></h4>
                    <span>{{$place["properties"]}} Propiedades</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
