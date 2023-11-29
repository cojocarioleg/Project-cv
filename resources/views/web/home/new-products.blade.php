<section class="new-products">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">
                    <span>New products</span>
                </h2>
            </div>
        </div>

        <div class="owl-carousel owl-theme owl-carousel-full">
            @foreach ($products->take(4) as $product )
            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-new">New</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html">
                        <img src="{{$product->getImage()}}" alt="{{$product->title}}">
                    </a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">
                           {{$product->title}}
                        </a>
                    </h4>
                    <p class="product-excerpt">
                        {{ Illuminate\Support\Str::limit($product->description, 50, '...') }}
                    </p>

                    <div class="product-bottom-details d-flex justify-content-between">
                        @if ($product->new_price)
                        <div class="product-price">
                            <small>
                                ${{$product->price}}
                            </small>
                            ${{$product->new_price}}
                        </div>
                        @else
                        <div class="product-price">

                            ${{$product->price}}
                        </div>
                        @endif

                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/2.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 2</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum dolor</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <!-- <div class="offer-hit">Hit</div>
                    <div class="offer-new">New</div> -->
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/3.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 3 Lorem ipsum</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            $100
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/4.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 4</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum dolor</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            <small>$70</small>
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                    <div class="offer-new">New</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/5.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 5 Lorem ipsum dolor, sit amet consectetur
                            adipisicing.</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat, aperiam!</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            <small>$70</small>
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                    <div class="offer-new">New</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/6.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 6</a>
                    </h4>
                    <p class="product-excerpt"></p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            <small>$70</small>
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                    <div class="offer-new">New</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/7.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 7</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Placeat, aperiam!</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            <small>$70</small>
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-card-offer">
                    <div class="offer-hit">Hit</div>
                    <div class="offer-new">New</div>
                </div>
                <div class="product-thumb">
                    <a href="product.html"><img src="assets/web/img/products/8.jpg" alt=""></a>
                </div>
                <div class="product-details">
                    <h4>
                        <a href="product.html">Product 8 Lorem</a>
                    </h4>
                    <p class="product-excerpt">Lorem ipsum dolor</p>
                    <div class="product-bottom-details d-flex justify-content-between">
                        <div class="product-price">
                            <small>$70</small>
                            $65
                        </div>
                        <div class="product-links">
                            <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
