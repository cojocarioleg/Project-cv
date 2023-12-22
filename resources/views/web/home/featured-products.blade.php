<section class="featured-products">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">
                    <span>Produse Recomandate</span>
                </h2>
            </div>
        </div>

        <div class="row">
            @foreach ($products->take(15) as $product)
                @foreach ($product->types as $item)
                    @if ($item->slug == 'hit')
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="product-card">
                                <div class="product-card-offer">
                                    <div class="offer-hit">Hit</div>

                                </div>
                                <div class="product-thumb">
                                    <a href="{{ route('shopProduct', $product->slug) }}">
                                        <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                                    </a>
                                </div>
                                <div class="product-details">
                                    <h4>
                                        <a href="{{ route('shopProduct', $product->slug) }}">
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
                                                enctype="multipart/form-data" id="addCart" >
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
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</section>
