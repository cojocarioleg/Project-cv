@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title')
    {{ $product->title}}
@endsection

@section('content')
<main class="main">
    @include('web.layouts.container-fluid', ['name' => $product->title])

    <div class="container-fluid">
        <div class="row">
            @include('web.product.slider')

           @include('web.product.shortDescription')
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="product-content-details bg-white p-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description-tab-pane" type="button" role="tab"
                                aria-controls="description-tab-pane" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="features-tab" data-bs-toggle="tab"
                                data-bs-target="#features-tab-pane" type="button" role="tab"
                                aria-controls="features-tab-pane" aria-selected="false">Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="video-tab" data-bs-toggle="tab"
                                data-bs-target="#video-tab-pane" type="button" role="tab"
                                aria-controls="video-tab-pane" aria-selected="false">Video</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                            aria-labelledby="description-tab" tabindex="0">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="tab-pane fade" id="features-tab-pane" role="tabpanel"
                            aria-labelledby="features-tab" tabindex="0">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Colors</th>
                                        <td>
                                            @foreach ($product->colors as $item )
                                                {{$item->title}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sizes</th>
                                        <td>
                                            @foreach ($product->sizes as $item )
                                                {{$item->title}}
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="video-tab-pane" role="tabpanel"
                            aria-labelledby="video-tab" tabindex="0">
                            <div class="ratio ratio-16x9">
                                <video src="{{asset('assets/web/vidio/clothing.mp4')}}" controls></video>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                @foreach ($products as  $product)
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
                            <img src="{{$product->getImage()}}" alt="{{$product->title}}">
                        </a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="{{route('shopProduct', $product->slug)}}">
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
                                <a href="#" class="btn btn-outline-secondary add-to-cart">
                                    <i
                                        class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>

</main>
@endsection
