@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.flash')
@extends('web.layouts.cart')
@extends('web.layouts.footer')


@section('title')
    {{ 'Checkout' }}
@endsection

@section('content')
    <main class="main">

        @include('web.layouts.container-fluid', ['name' => 'Checkout'])

        <div class="container-fluid">

            <form action="{{route('checkout.confirm')}}" method="Post" class="needs-validation" novalidate>
                @csrf

                <div class="row">

                    <div class="col-lg-8 mb-3">
                        <div class="Checkout p-3 h-100 bg-white">

                            <h1 class="section-title h5"><span>Billing address</span></h1>

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $user->name }}" aria-label="Name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $user->email }}" aria-label="Email" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="+123456789" aria-label="Phone" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <select id="country" name="country" class="form-select" aria-label="Country"
                                        required>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        placeholder="City name" aria-label="City" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Street, house num, flat num" aria-label="Address" required>
                                </div>

                                <div class="col">
                                    <label for="comment" class="form-label">Comment</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Order note..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">

                        <div class="cart-summary p-3 sidebar h-100">
                            <h5 class="section-title"><span>Order total</span></h5>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    @foreach ($order->products as $product)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $product->title }}
                                                    @if ($product->new_price)
                                                        <small>(${{ $product->new_price }}) x
                                                            {{ $product->pivot->count }}</small>
                                                    @else
                                                        <small>(${{ $product->price }}) x
                                                            {{ $product->pivot->count }}</small>
                                                    @endif

                                                </td>
                                                <td class="text-end">${{ $product->getPriceForCount() }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-end">
                                                ${{ $order->getFullPrice() }}
                                            </td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>

                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-warning">Make Order</button>
                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </main>
@endsection
@section('js')
    <script src="{{asset('assets/web/js/countres.js')}}"></script>
@endsection
