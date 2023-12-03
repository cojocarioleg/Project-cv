<div class="col-md-5 col-lg-4 mb-3">
    <div class="bg-white h-100">
        <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade">
            <div class="carousel-inner">
                @foreach ($product->images as $image)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <img src="{{ $product->getImage() }}" class="d-block w-100" alt="{{ $product->title }}">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ $image->image }}" class="d-block w-100" alt="...">
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
