<div class="row">
    @foreach ($products as $element)
        <div class="col-lg-4 col-sm-6 mb-3">
            <div class="product-card">
                <div class="product-card-offer">
                    @foreach ($element->types as $item)
                        @if ($item->slug == 'hit')
                            <div class="offer-hit">Hit</div>
                        @endif
                        @if ($item->slug == 'new')
                            <div class="offer-new">New</div>
                        @endif
                    @endforeach
                </div>
                <div class="product-thumb">
                    <a href="#">
                        <img src="{{ $element->getImage() }}" alt="{{ $element->title }}">
                    </a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="#">
                            {{ $element->title }}
                        </a>
                    </h4>
                    <p class="product-excerpt">
                        {{ Illuminate\Support\Str::limit($element->description, 50, '...') }}
                    </p>
                    <div class="product-bottom-details d-flex justify-content-between">

                        @if ($element->new_price)
                            <div class="product-price">
                                <small>
                                    ${{ $element->price }}
                                </small>
                                ${{ $element->new_price }}
                            </div>
                        @else
                            <div class="product-price">

                                ${{ $element->price }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-12">
        {{ $products->links() }}
    </div>
</div>
