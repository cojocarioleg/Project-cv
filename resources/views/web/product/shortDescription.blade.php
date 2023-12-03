<div class="col-md-7 col-lg-8 mb-3">
    <div class="bg-white product-content p-3 h-100">
        <h1 class="section-title h3">
            <span>{{ $product->title }}</span>
        </h1>

        @if ($product->new_price)
            <div class="product-price">
                <small>${{ $product->price }}</small>
                ${{ $product->new_price }}
            </div>
        @else
            <div class="product-price">
                ${{ $product->price }}
            </div>
        @endif


        <p>
            {{ Illuminate\Support\Str::limit($product->description, 100, '...') }}
        </p>

        <div class="product-add2cart">
            <div class="input-group">
                <input type="number" class="form-control" value="1" min="1">
                <button class="btn btn-warning">
                    <i class="fas fa-shopping-cart"></i>
                    Add to cart
                </button>
            </div>
        </div>

        <div class="row mt-3">
            @foreach ($advatages as $advatage )
            <div class="col-lg-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="{{$advatage->icon}}">
                                </i> {{$advatage->title}}
                        </h5>
                        <ul class="list-unstyled">
                            <li>{{$advatage->advantage_1}}</li>
                            <li>{{$advatage->advantage_2}}</li>
                            <li>{{$advatage->advantage_3}}</li>
                            <li>{{$advatage->advantage_4}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach





        </div>

    </div>
</div>
