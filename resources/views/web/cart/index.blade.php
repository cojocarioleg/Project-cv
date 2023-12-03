@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title')
    {{ 'Cart' }}
@endsection

@section('content')
    <main class="main">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Cart</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-8 mb-3">
                    <div class="cart-content p-3 h-100 bg-white">

                        <div class="table-responsive">
                            <table class="table align-middle table-hover">
                                <thead class="table-dark">
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
                                                <input type="number" value="1" class="form-control cart-qty">
                                            </td>
                                            <td>
                                                <form action="{{ route('removeBasket', $product->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm(Swal.fire('SweetAlert2 is working!'))">
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
                                            <button class="btn btn-outline-warning">Update Cart</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">

                    <div class="cart-summary p-3 sidebar">
                        <h5 class="section-title"><span>Cart Summary</span></h5>

                        <div class="d-flex justify-content-between my-3">
                            <h6>Subtotal</h6>
                            <h6>$1000</h6>
                        </div>

                        <div class="d-flex justify-content-between my-3">
                            <h6>Coupon</h6>
                            <h6>-$20</h6>
                        </div>

                        <div class="d-flex justify-content-between my-3 border-bottom">
                            <h6>Shipping</h6>
                            <h6>$10</h6>
                        </div>

                        <button class="btn btn-link px-0 btn-coupon" data-bs-toggle="collapse"
                            data-bs-target="#collapseCoupon">
                            Have a Coupon?
                        </button>

                        <div class="input-group collapse" id="collapseCoupon">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                            <button class="btn btn-warning">
                                <i class="fa-regular fa-circle-check"></i>
                            </button>
                        </div>

                        <div class="d-flex justify-content-between my-3">
                            <h3>Total</h3>
                            <h3>$990</h3>
                        </div>

                        <div class="d-grid">
                            <a href="#" class="btn btn-warning">Checkout</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
