<div class="col-12 col-sm-6">
    <h3 class="d-inline-block d-sm-none">Fraccionamiento {{ $development_name }}</h3>
    <div class="col-12">
        <img src="{{$imageSelected}}" class="product-image" alt="Product Image">
    </div>
    <div class="col-12 product-image-thumbs">
        @foreach ($images as $index => $image)
        <div wire:key="{{$index}}" class="product-image-thumb {{$active ? 'active' : ''}}" wire:click="selectImage('{{$image->file_url}}')">
            <img src="{{$image->file_url}}"
                alt="Product Image">
        </div>
        @endforeach
    </div>
</div>
