@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.flash')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title')
    {{ 'Cart' }}
@endsection

@section('content')
    <main class="main">
        @include('web.layouts.container-fluid', ['name' => 'Cart'])

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-8 mb-3">
                    <div class="cart-content p-3 h-100 bg-white">

                        <div class="table-responsive">
                            <table class="table align-middle table-hover">

                                @csrf
                                <thead class="table-dark ">
                                    <tr>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th><i class="fa-regular fa-trash-can"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->products as $product)
                                        <tr>
                                            <td class="product-img-td  align-middle">
                                                <a href="#">
                                                    <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                                                </a>
                                            </td>
                                            <td class=" align-middle">
                                                <a href="#" class="cart-content-title">
                                                    {{ $product->title }}
                                                </a>
                                            </td>
                                            @if ($product->new_price)
                                                <td>${{ $product->new_price }}</td>
                                            @else
                                                <td>${{ $product->price }}</td>
                                            @endif

                                            <td>
                                            <td>

                                                <div class="btn-group form-inline">
                                                    <form action="{{ route('removeBasket', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" href="">
                                                            <span class="glyphicon glyphicon-minus"
                                                                aria-hidden="true"> -
                                                            </span>
                                                        </button>
                                                        @csrf
                                                    </form>
                                                    <span class="badge text-success">{{$product->pivot->count}}</span>
                                                    <form action="{{ route('addBasket', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success" href="">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true">
                                                                +
                                                            </span>
                                                        </button>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </td>
                                            </td>
                                            <td>
                                                <form action="{{ route('removeBasket', $product->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('are your sure?')">
                                                        <i class="fa-regular fa-circle-xmark"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-end">
                                            <button id="updateCart" class="btn btn-outline-warning"
                                                data-url="">
                                               Add Products
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>


                            </table>
                        </div>

                    </div>
                </div>

                @include('web.cart.cart-summary')

            </div>
        </div>

    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let masiv = [];
            $("#updateCart").click(function() {
                $("input[name=count]").each(function(key, val) {
                    masiv.push([
                        key = $(this).attr("data-pivotId"),
                        val = $(this).val(),
                    ]);
                });

                url = $(this).data("url");

                $.ajax({
                    url: url,
                    type: "GET",
                    data: {
                        masiv: masiv,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: (data) => {
                        console.log(masiv);
                    },
                });

            });
        });
    </script>
@endsection
