<div class="row">
    @foreach ($products as $product)
        <div class="col-lg-4 col-sm-6 mb-3">
            <div class="product-card">
                <div class="product-card-offer">
                    @foreach ($product->types as $item)
                        @if ($item->slug == 'hit')
                            <div class="offer-hit">Hit</div>
                        @endif
                        @if ($item->slug == 'new')
                            <div class="offer-new">New</div>
                        @endif
                    @endforeach
                </div>
                <div class="product-thumb">
                    <a href="{{route('shopProduct', $product->slug)}}">
                        <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                    </a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="{{route('shopProduct', $product->slug)}}">
                            {{ $product->title }}
                        </a>
                    </h4>
                    <p class="product-excerpt">
                        {{ Illuminate\Support\Str::limit($product->description, 50, '...') }}
                    </p>
                    <div class="product-bottom-details d-flex justify-content-between">

                        @if ($product->new_price)
                            <div class="product-price">
                                <small>
                                    {{ $product->price }}
                                    {{App\Helpers\CurrencyConversionHelper::getCurrencySymbol()}}
                                </small>
                                {{ $product->new_price }}
                                {{App\Helpers\CurrencyConversionHelper::getCurrencySymbol()}}
                            </div>
                        @else
                            <div class="product-price">
                                {{ $product->price }}
                                {{App\Helpers\CurrencyConversionHelper::getCurrencySymbol()}}
                            </div>
                        @endif
                        <div class="product-links">
                            <form action="{{ route('addBasket', $product->id) }}" method="post"
                                enctype="multipart/form-data" id="addCart">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary add-to-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                        </div>
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
